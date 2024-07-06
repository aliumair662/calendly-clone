<x-app-layout>
    <select id="broadcast">
        <option value="USA">USA</option>
        <option value="UK">UK</option>
        <option value="Canada">Canada</option>
    </select>

    <script>
        let select = document.querySelector('#broadcast');
        select.addEventListener('change', async (e) => {
            const formData = new FormData();
            formData.append('message', e.target.value);

            axios.post('/broadcast', formData)
                .then(function(res) {
                    console.log(res);
                    // Handle success
                })
                .catch(function(err) {
                    console.error(err);
                    // Handle error
                });
        })
    </script>
</x-app-layout>