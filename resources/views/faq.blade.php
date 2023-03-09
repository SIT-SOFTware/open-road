<x-app-layout>

    <x-carousel name="slide" />

    <x-slot name="content">

        <div class="row justify-content-between">
            <h1 class="col-4">Frequently Asked Questions</h1>
            <!-- TODO: Only show the following button if user is admin -->
            <!-- TODO: Style the button to fit screen size changes -->
            <a href="{{ route('editfaq') }}" class="col-1"><button type="button" class="btn btn-danger">Edit Page</button></a>
        </div>
        
        <?php // This code taken from https://www.kodingmadesimple.com/2017/05/add-update-delete-read-json-file-php.html
        // load file
        $data = file_get_contents('faq.json');

        // decode json to associative array
        $json_arr = json_decode($data, true);

        for ($i = 0; $i < count($json_arr); $i++) {
            echo "<h2>" . $json_arr[$i]['Question'] . "</h2>";
            echo "<p>" . $json_arr[$i]['Answer'] . "</p>";
        }
        ?>

    </x-slot>

</x-app-layout>
