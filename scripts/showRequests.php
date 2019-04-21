<?php
$req_dir = __DIR__ . '/../requests';
$files = array_diff(scandir($req_dir), array('.', '..'));


foreach ($files as $file) {
//    $file = preg_replace('/\.json/i', '', $file);
//    $file = str_replace('\\','',$file);
//    $file = preg_replace('/\s\d{2,3}\s/', ' ', $file);
    echo '
            <div class="form-check">
              <input class="form-check-input" name="req_fields[]" type="checkbox" value="' .$file. '
              " id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">' . $file . '
              </label>
            </div><br> 
              ';
}

