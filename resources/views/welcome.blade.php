<!DOCTYPE html>
<html>
<head>
    <title>Comments System</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        .container {
            margin-top: 50px;
        }

        #comments-list {
            margin-top: 30px;
        }

        .comment {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }
        @livewireStyles
    </style>
</head>
<body>
<div class="container">
    <h1>Comments System</h1>
    <livewire:comments/>
</div>

<script src="script.js"></script>
@livewireScripts
</body>
</html>
