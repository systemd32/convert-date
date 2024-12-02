document.addEventListener ("DOMContentLoaded", function () {
    function updateTime () {
        document.getElementById ('current-time').textContent = Math.floor (Date.now () / 1000).toString ()
    }

    updateTime ()

    setInterval (updateTime, 1000);

    let timeNow = Math.floor (Date.now () / 1000).toString ()

    updateDayYearMonth(timeNow)

    document.getElementById("copyCurrentTime").addEventListener("click", function() {
        var textToCopy = document.getElementById("current-time").textContent;

        var tempTextarea = document.createElement("textarea");
        tempTextarea.value = textToCopy;
        document.body.appendChild(tempTextarea);

        tempTextarea.select();
        tempTextarea.setSelectionRange(0, 99999);

        document.execCommand("copy");

        document.body.removeChild(tempTextarea);

        var tooltip = document.getElementById("tooltip");
        tooltip.style.visibility = "visible";
        tooltip.style.opacity = "1";
        tooltip.style.left = (event.pageX + 10) + "px";
        tooltip.style.top = (event.pageY - 30) + "px";

        setTimeout(function() {
            tooltip.style.visibility = "hidden";
            tooltip.style.opacity = "0";
        }, 2000);
    });

    document.getElementById("unix_time").addEventListener("input", function(event) {
        let timestamp = +event.target.value;

        updateDayYearMonth(timestamp)

    });

    const inputs = document.querySelectorAll('.input-date');

    // Loop through each input and add an event listener
    inputs.forEach(input => {
        input.addEventListener('input', (event) => {
            let year = document.getElementById('year').value;
            let month = document.getElementById('month').value;
            let day = document.getElementById('day').value;
            let hour = document.getElementById('hour').value;
            let minute = document.getElementById('minute').value;
            let second = document.getElementById('second').value;


            let strDate = year + "-"+month+"-"+day+" "+hour+":"+minute+":"+second
            let date = new Date(strDate);

            console.log (month, date, date.getTime())

            document.getElementById("unix_time").value = date.getTime () / 1000
            setDetailTime(date)

        });
    });

    function updateDayYearMonth(timestamp) {
        let length = timestamp.toString().length
        let tmpTimestamp = timestamp
        if (length === 10 || length === 9 || length === 8 || length === 7 || length === 6) {
            tmpTimestamp *= 1000
        } else if (length === 11) {
            tmpTimestamp *= 100
        } else if (length === 12) {
            tmpTimestamp *= 10
        }
        let date = new Date(tmpTimestamp);

        let localYear = date.getFullYear();
        let localMonth = date.getMonth() + 1;
        let localDate = date.getDate();
        let localHours = date.getHours();
        let localMinutes = date.getMinutes();
        let localSeconds = date.getSeconds();

        document.getElementById ('unix_time').value = timestamp
        document.getElementById ('year').value = localYear
        document.getElementById ('month').value = localMonth
        document.getElementById ('day').value = localDate
        document.getElementById ('hour').value = localHours
        document.getElementById ('minute').value = localMinutes
        document.getElementById ('second').value = localSeconds

        setDetailTime(date)
    }

    function setDetailTime(date) {
        document.getElementById ('local-timestamp').textContent = date.toString()
        document.getElementById ('gmt-timestamp').textContent = date.toUTCString() + "+0000"
        document.getElementById ('relative-timestamp').textContent = getRelativeTime(date)
        setFormatTime(date)
    }

    function setFormatTime(date) {
        const formattedUTC = date.toLocaleString("en-US", {
            timeZone: "UTC",
            month: "2-digit",
            day: "2-digit",
            year: "numeric",
            hour: "2-digit",
            minute: "2-digit",
            hour12: true,
        });
        document.getElementById ('utc-format').textContent = formattedUTC
        const isoDate = date.toISOString();
        document.getElementById ('iso8601-format').textContent = isoDate

        const rfcDate = date.toUTCString().replace('GMT', '+0000');
        document.getElementById ('rfc-format').textContent = rfcDate

        const dayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
        const monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

        const dayName = dayNames[date.getUTCDay()];
        const day = String(date.getUTCDate()).padStart(2, '0');
        const month = monthNames[date.getUTCMonth()];
        const year = String(date.getUTCFullYear()).slice(2); // Two-digit year
        const hours = String(date.getUTCHours()).padStart(2, '0');
        const minutes = String(date.getUTCMinutes()).padStart(2, '0');
        const seconds = String(date.getUTCSeconds()).padStart(2, '0');

        const rfc2822Date = `${dayName}, ${day}-${month}-${year} ${hours}:${minutes}:${seconds} UTC`;
        document.getElementById ('rfc2822-format').textContent = rfc2822Date

        const rfc3339Date = `${year}-${month}-${day}T${hours}:${minutes}:${seconds}+00:00`;
        document.getElementById ('rfc3339-format').textContent = rfc3339Date
    }

    document.getElementById("copy2").addEventListener("click", function() {
        var textToCopy = document.getElementById("unix_time").value;

        var tempTextarea = document.createElement("textarea");
        tempTextarea.value = textToCopy;
        document.body.appendChild(tempTextarea);

        tempTextarea.select();
        tempTextarea.setSelectionRange(0, 99999);

        document.execCommand("copy");

        document.body.removeChild(tempTextarea);

        var tooltip = document.getElementById("tooltip2");
        tooltip.style.visibility = "visible";
        tooltip.style.opacity = "1";
        tooltip.style.left = (event.pageX - 300) + "px";
        tooltip.style.top = (event.pageY - 410) + "px";

        setTimeout(function() {
            tooltip.style.visibility = "hidden";
            tooltip.style.opacity = "0";
        }, 2000);
    });

    function getRelativeTime(date) {
        const now = new Date();
        const elapsed = (date - now) / 1000; // elapsed time in seconds

        const rtf = new Intl.RelativeTimeFormat('en', { numeric: 'auto' });

        const units = [
            { unit: 'year', value: 60 * 60 * 24 * 365 },
            { unit: 'month', value: 60 * 60 * 24 * 30 },
            { unit: 'week', value: 60 * 60 * 24 * 7 },
            { unit: 'day', value: 60 * 60 * 24 },
            { unit: 'hour', value: 60 * 60 },
            { unit: 'minute', value: 60 },
            { unit: 'second', value: 1 },
        ];

        for (const { unit, value } of units) {
            if (Math.abs(elapsed) >= value || unit === 'second') {
                return rtf.format(Math.round(elapsed / value), unit);
            }
        }
    }


});
