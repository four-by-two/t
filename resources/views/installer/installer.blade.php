
    <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
         
        <link rel="icon" type="image/x-icon" href="https://i.ibb.co/hfLLWjZ/ezgif-1-62518d2ae2.png"> 
        <link href="https://fonts.bunny.net/css?family=space-grotesk:300,400,500,600,700" rel="stylesheet" />
        <style>
            *{
            transition: all 0.6s;
            }

            html {
                height: 100%;
                background-color: white;
            }

            body{
                font-family: 'Space Grotesk', sans-serif;
                color: black;
                margin: 0;
            }

            #main{
                display: table;
                width: 100%;
                height: 100vh;
                text-align: center;
            }

            .fof{
                display: table-cell;
                vertical-align: middle;
            }

            .fof h1{
                font-size: 50px;
                display: inline-block;
                padding-right: 12px;
                animation: type .5s alternate infinite;
            }

            .fof h2{
                font-size: 30px;
                display: inline-block;
                padding-right: 12px;
                animation: type .5s alternate infinite;
            }

            @keyframes type{
                from{box-shadow: inset -3px 0px 0px black;}
                to{box-shadow: inset -3px 0px 0px transparent;}
            }

            button {
                display: inline-block;
                outline: 0;
                border: 0;
                cursor: pointer;
                background: #000000;
                color: #FFFFFF;
                border-radius: 8px;
                padding: 14px 24px 16px;
                font-size: 18px;
                font-weight: 700;
                line-height: 1;
                transition: transform 200ms,background 200ms;
                
                &:hover {
                    transform: translateY(-2px);
                }
            }

.form .button, .form .message, .customSelect, .form .select, .form .textarea, .form .text-input, .form .option-input + label, .form .checkbox-input + label, .form .label {
  padding: 0.75em 1em;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  outline: none;
  line-height: normal;
  border-radius: 0;
  border: none;
  background: none;
  display: block;
}

.form .label {
  font-weight: bold;
  padding-top: 0;
  padding-left: 0;
  letter-spacing: 0.025em;
  font-size: 1.125em;
  line-height: 1.25;
  position: relative;
  z-index: 100;
}
.required .form .label:after, .form .required .label:after {
  content: " *";
  color: #E8474C;
  font-weight: normal;
  font-size: 0.75em;
  vertical-align: top;
}

.customSelect, .form .select, .form .textarea, .form .text-input, .form .option-input + label, .form .checkbox-input + label {
  font: inherit;
  line-height: normal;
  width: 100%;
  box-sizing: border-box;
  background: #222222;
  color: white;
  position: relative;
}
.customSelect:placeholder, .form .select:placeholder, .form .textarea:placeholder, .form .text-input:placeholder, .form .option-input + label:placeholder, .form .checkbox-input + label:placeholder {
  color: white;
}
.customSelect:-webkit-autofill, .form .select:-webkit-autofill, .form .textarea:-webkit-autofill, .form .text-input:-webkit-autofill, .form .option-input + label:-webkit-autofill, .form .checkbox-input + label:-webkit-autofill {
  box-shadow: 0 0 0px 1000px #111111 inset;
  -webkit-text-fill-color: white;
  border-top-color: #111111;
  border-left-color: #111111;
  border-right-color: #111111;
}
.customSelect:not(:focus):not(:active).error, .form .select:not(:focus):not(:active).error, .form .textarea:not(:focus):not(:active).error, .form .text-input:not(:focus):not(:active).error, .form .option-input + label:not(:focus):not(:active).error, .form .checkbox-input + label:not(:focus):not(:active).error, .error .customSelect:not(:focus):not(:active), .error .form .select:not(:focus):not(:active), .form .error .select:not(:focus):not(:active), .error .form .textarea:not(:focus):not(:active), .form .error .textarea:not(:focus):not(:active), .error .form .text-input:not(:focus):not(:active), .form .error .text-input:not(:focus):not(:active), .error .form .option-input + label:not(:focus):not(:active), .form .error .option-input + label:not(:focus):not(:active), .error .form .checkbox-input + label:not(:focus):not(:active), .form .error .checkbox-input + label:not(:focus):not(:active) {
  background-size: 8px 8px;
  background-image: linear-gradient(135deg, rgba(232, 71, 76, 0.5), rgba(232, 71, 76, 0.5) 25%, transparent 25%, transparent 50%, rgba(232, 71, 76, 0.5) 50%, rgba(232, 71, 76, 0.5) 75%, transparent 75%, transparent);
  background-repeat: repeat;
}
.form:not(.has-magic-focus) .customSelect.customSelectFocus, .form:not(.has-magic-focus) .customSelect:active, .form:not(.has-magic-focus) .select:active, .form:not(.has-magic-focus) .textarea:active, .form:not(.has-magic-focus) .text-input:active, .form:not(.has-magic-focus) .option-input + label:active, .form:not(.has-magic-focus) .checkbox-input + label:active, .form:not(.has-magic-focus) .customSelect:focus, .form:not(.has-magic-focus) .select:focus, .form:not(.has-magic-focus) .textarea:focus, .form:not(.has-magic-focus) .text-input:focus, .form:not(.has-magic-focus) .option-input + label:focus, .form:not(.has-magic-focus) .checkbox-input + label:focus {
  background: #4E4E4E;
}

.form .message {
  position: absolute;
  bottom: 0;
  right: 0;
  z-index: 100;
  font-size: 0.625em;
  color: white;
}

.form .option-input, .form .checkbox-input {
  border: 0;
  clip: rect(0 0 0 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px;
}
.form .option-input + label, .form .checkbox-input + label {
  display: inline-block;
  width: auto;
  color: #4E4E4E;
  position: relative;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  cursor: pointer;
}
.form .option-input:focus + label, .form .checkbox-input:focus + label, .form .option-input:active + label, .form .checkbox-input:active + label {
  color: #4E4E4E;
}
.form .option-input:checked + label, .form .checkbox-input:checked + label {
  color: white;
}

.form .button {
  font: inherit;
  line-height: normal;
  cursor: pointer;
  background: #E8474C;
  color: white;
  font-weight: bold;
  width: auto;
  margin-left: auto;
  font-weight: bold;
  padding-left: 2em;
  padding-right: 2em;
}
.form .button:hover, .form .button:focus, .form .button:active {
  color: white;
  border-color: white;
}
.form .button:active {
  position: relative;
  top: 1px;
  left: 1px;
}

body {
  padding: 2em;
}

.form {
  max-width: 40em;
  margin: 0 auto;
  position: relative;
  display: flex;
  flex-flow: row wrap;
  justify-content: space-between;
  align-items: flex-end;
}
.form .field {
  width: 100%;
  margin: 0 0 1.5em 0;
}
@media screen and (min-width: 40em) {
  .form .field.half {
    width: calc(50% - 1px);
  }
}
.form .field.last {
  margin-left: auto;
}
.form .textarea {
  max-width: 100%;
}
.form .select {
  text-indent: 0.01px;
  text-overflow: "" !important;
}
.form .select::-ms-expand {
  display: none;
}
.form .checkboxes, .form .options {
  padding: 0;
  margin: 0;
  list-style-type: none;
  overflow: hidden;
}
.form .checkbox, .form .option {
  float: left;
  margin: 1px;
}
        </style>

    </head>
    <body>
    <div id="main">
    	<div class="fof">
        <form class='form' method="post" action="/install/submit">
          <p class='field required'>
            <label class='label required' for='name'>App Name</label>
            <input class='text-input' id='name' name='name' required type='text' value='Use Tab'>
          </p>
          <p class='field required'>
            <label class='label' for='app_url'>App URL (used in API)</label>
            <input class='text-input' required id='app_url' placeholder='https://777.dog' name='app_url' type='text'>
          </p>
          <p class='field required'>
            <label class='label' for='wildcard_domain'>App Wildcard Domain (if not using, leave blank)</label>
            <input class='text-input' required id='wildcard_domain' name='wildcard_domain' placeholder='.777.dog' type='text'>
          </p>
          <p class='field required half'>
            <label class='label' for='master_ip'>Server IP</label>
            <input class='text-input' required id='server_ip' placeholder='{{ $_SERVER["SERVER_ADDR"] }}' name='server_ip' type='text'>
          </p>
          <p class='field required half'>
            <label class='label' for='master_ip'>Master IP</label>
            <input class='text-input' required id='master_ip' name='master_ip' placeholder='{{ request()->DogGetIP() }}' type='text'>
          </p>
          <p class='field half required'>
            <label class='label' for='login'>Admin Email</label>
            <input class='text-input' id='login' name='login' required type='text' value='admin@test.com'>
          </p>
        <div class='field'>
          <label class='label'>Select providers to import to database</label>
          <ul class='checkboxes'>
          @foreach($data['gameproviders'] as $id => $gameprovider)
            <li class='checkbox'>
              <input class='checkbox-input' id='choice-{{ $id }}' name='choice {{ $id }}' type='checkbox' value='{{ $id }}'>
              <label class='checkbox-label' for='choice-{{ $id }}'>{{ $gameprovider['name'] }}</label>
            </li>
          @endforeach
          </ul>
        </div>
        <div class='field'>
          <label class='label'>Install Options</label>
          <ul class='checkboxes'>
            <li class='checkbox'>
              <input class='option-input' id='option-0' name='option' type='radio' value='0'>
              <label class='option-label' for='option-0'>Migrate database</label>
            </li>
            <li class='checkbox'>
              <input class='option-input' id='option-1' name='option' type='radio' value='1'>
              <label class='option-label' for='option-1'>Install Admin Panel</label>
            </li>
            <li class='checkbox'>
              <input class='option-input' id='option-2' name='option' type='radio' value='2'>
              <label class='option-label' for='option-2'>Retrieve Default Gameslist</label>
            </li>
            <li class='checkbox'>
              <input class='option-input' id='option-3' name='option' type='radio' value='3'>
              <label class='option-label' for='option-3'>Setup Operator</label>
            </li>
          </ul>
        </div>
        <p class='field'>
          <label class='label' for='about'>Allowed Panel IP's</label>
          <textarea class='textarea' cols='50' id='allowed_ips' placeholder='{{ request()->DogGetIP() }}, 127.0.0.1' value='{{ request()->DogGetIP() }}, 127.0.0.1' name='allowed_ips' rows='2'></textarea>
        </p>
        <p class='field half'>
          <label class='label' for='select'>Position</label>
          <select class='select' id='select'>
            <option selected value=''></option>
            <option value='ceo'>CEO</option>
            <option value='front-end'>Front-end developer</option>
            <option value='back-end'>Back-end developer</option>
          </select>
        </p>
        <p class='field half'>
          <input class='button' type='submit' value='Send'>
        </p>
      </form>
    	</div>
    </div>
    </body>
</html>

