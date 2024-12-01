<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * Tên và mô tả của command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    protected $description = 'Generate sitemap.xml for the website';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $locales = config('app.locales');

        foreach ($locales as $locale) {
            $path = base_path('resources/lang/' . $locale);
            if (!is_dir($path)) {
                try {
                    $x = mkdir($path, 0777, true);
                    touch($path.'/content.php');
                }catch (\Exception $exception){
                    dd($exception->getMessage());
                }
            }
        }

        $sitemap = Sitemap::create();

        foreach ($locales as $locale) {
            $url = rtrim('https://dateconvertor.com', '/') . "/$locale/";
            $sitemap->add(
                    Url::create($url)
                    ->setLastModificationDate(now())
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(1.0)
            );
        }

        $sitemap->writeToFile(public_path('sitemap.xml')); // Lưu vào thư mục public

        $this->info('Sitemap generated successfully!');
        return 0;
    }
}
