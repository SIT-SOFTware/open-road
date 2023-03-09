<x-app-layout>

    {{-- <x-carousel name="slide" /> --}}

    <x-slot name="content">

        <div class="row justify-content-between">
            <h1 class="col-4">Frequently Asked Questions</h1>
        </div>

        <form method='post' action='{{ route('editfaq') }}'>
        
            <?php // This code taken from https://www.kodingmadesimple.com/2017/05/add-update-delete-read-json-file-php.html
            // load file
            $data = file_get_contents('faq.json');

            // decode json to associative array
            $json_arr = json_decode($data, true);

            for ($i = 0; $i < count($json_arr); $i++) {
                $qNum = $i;
                echo
                    "<div class='row justify-content-left border border-dark rounded p-2 mb-2'>
                        <label for='Question$i'>Question {$json_arr[$i]['Code']}:</label>
                        <input type='text' class='col-8 rounded' name='Question$i' placeholder='Question' value='{$json_arr[$i]['Question']}' />
                        <input type='hidden' name='$qNum' value='$i' />
                        <input type='submit' class='btn btn-danger col-1 ms-3' name='delete' value='Delete Question' /></br>
                        <label for='Answer$i'>Answer {$json_arr[$i]['Code']}:</label>
                        <textarea class='col-9 rounded' rows='10' name='Answer$i' placeholder='Answer'>{$json_arr[$i]['Answer']}</textarea></br>
                    </div>\n";
            }

            if(isset($_POST['delete'])) {
                $x = $_POST['$qNum'];

                unset($json_arr[$x]); // delete the entry
                $json_arr = array_values($json_arr); // rebase the array
                file_put_contents('faq.json', json_encode($json_arr)); // write the array to json
                header("refresh:0; url={{ route('editfaq') }}"); // refresh the page

            }

            // function delete($x) {
            //     unset($json_arr[$x]); // delete the q/a
            //     $json_arr = array_values($json_arr); // rebase the array
            //     file_put_contents('faq.json', json_encode($json_arr)); // write the array to json
            //     header("refresh:0; url={{ route('editfaq') }}");
            // }
            ?>

            <a href="{{ route('faq') }}" class="col-2 mt-6"><button type="button" class="btn btn-danger">Finish Editing</button></a>
        </form>

    </x-slot>

</x-app-layout>
