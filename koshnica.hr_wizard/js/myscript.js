    // Send HTML form data to Google Sheet
        $(function() {
            const scriptURL = 'https://script.google.com/macros/s/AKfycbxc34050-HsYXinSCbkdD2lKVPPUcQuPM4jEWVMfc-NxtVgQvDp/exec'
            const form = document.forms['send-cv']

            $("a[href='#finish']").on("click", function(e) {
                e.preventDefault()  
                fetch(scriptURL, { method: 'POST', body: new FormData(form)})  
                .then(response => alert('Success!', response))  
                .catch(error => alert('Data from your form were blocked from sending to us by some extension like Privacy Badger or other ad blocking extension. Please allow "script.google.com" in your extension or just witelist our site. WE DO NOT SERVE ADS OF ANY KIND.', error.message))
            });
        });