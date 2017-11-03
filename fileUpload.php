<!DOCTYPE html>
<html>
<head>
    <title>Samagyan | Upload Student</title>
    <style type="text/css">
        body{
            background-color: #eeeeee;
            margin: 0;
            padding: 0;
        }
        .frame{
            width: 500px;
            margin: auto;
            font-family: sans-serif;
            padding: 0;
        }
        form{            
            border: #cccccc 1px solid;
            height: 300px;
            width: 500px;
            padding: 20px;
            background-color: #fff;
        }
        .inputfile {
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }
        .inputfile + label {
            max-width: 80%;
            font-size: 1.25em;
            font-weight: 700;
            text-overflow: ellipsis;
            white-space: nowrap;
            display: inline-block;
            color: white;
            background-color: black;
            overflow: hidden;
            cursor: pointer; /* "hand" cursor */
            padding: 0.625rem 1.25rem;
        }
        .inputfile:focus + label,
        .inputfile + label:hover {
            background-color: red;
        }
        .inputfile:focus + label {
            outline: 1px dotted #000;
            outline: -webkit-focus-ring-color auto 5px;
        }
        .inputfile + label * {
            pointer-events: none;
        }
        .button-snd{
            height: 43px;
            width: 165px;
            text-align: center;    
            background-color: #38a25a;
            color: #fff;
            border: none;
            font-size: 1.25em;
            font-weight: bold;
            /*border-radius: 10px;*/
            cursor: pointer;
        }
        .button-snd:hover{
            background-color: #2b7f46;
        }
        .button-sync{
            height: 43px;
            width: 165px;
            text-align: center;    
            background-color: #8e44ad;
            color: #fff;
            border: none;
            font-size: 1.25em;
            font-weight: bold;
            /*border-radius: 10px;*/
            cursor: pointer;
        }
        .button-sync:hover{
            background-color: #6c3384;
        }
        h3{
            text-align: center;
            font-weight: bolder;
            font-size: 25px;
            text-transform: uppercase;
            margin: 40px 0;
            color: #0094d9;
        }
        h3 span{
            color: #fdb418;
        }
        .form-field{
            width: 45%;
            float: left;
            margin: 0 auto;
            padding: 0 0 0 20px;
            height: 50px;
        }
        a{
            text-decoration: none;
            color: #555555;
        }
        a:hover{
            color: #0094d9;
        }

    </style>
</head>
<body>
    <div class="frame">
        <h3 class="logout"><a href="logout.php">Log out</a></h3>
        <h3>Upload <span> CSV</span></h3>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
            <div class="form-field">
                <input type="file" name="fileToUpload" id="fileToUpload" class="inputfile" />
                <label for="fileToUpload"><strong>Choose a file</strong></label>            
            </div>
            <div class="form-field">
                <input class="button-snd" type="submit" value="Upload CSV" name="submit">
            </div>
            <div class="form-field"></div>
            <div class="form-field"></div>
            <div class="form-field">
                <input class="button-sync" type="submit" value="Sync Student" name="sync">
            </div>
        </form>
        <br>
        <h3><a href="welcome.php">Home</a></h3>
    </div>
</body>
</html>

