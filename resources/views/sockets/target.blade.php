<x-app-layout>
    <h1>Select Option: <span id="selected-opt"></span> </h1>

    <script>
        Echo.channel('testChannel').listen('TestEvent', (e) => {
            document.querySelector('#selected-opt').innerHTML = e.message;
        })
    </script>
</x-app-layout>