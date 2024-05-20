<!DOCTYPE html>
<html>
<head>
    <title>How to Create Multi Language Website in Laravel - Anupam Talukdar</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div class="container">

    <h1>How to Create Multi Language Website in Laravel - Anupam Talukdar</h1>

    <div class="row">
        <div class="col-md-2 col-md-offset-6 text-right">
            <strong>Select Language: </strong>
        </div>
        <div class="col-md-4">
            <select class="form-control changeLang">
                <option value="en" {{ session()->get('language') == 'en' ? 'selected' : '' }}>English</option>
                <option value="bn" {{ session()->get('language') == 'bn' ? 'selected' : '' }}>Bangla</option>
            </select>
        </div>
    </div>
    {{ session()->get('language') }}

    <h1>{{ __('text.title') }}</h1>

</div>
</body>

<script type="text/javascript">

    var url = "{{ route('langChange') }}";

    $(".changeLang").change(function(){
        alert(url);
        window.location.href = url + "?lang="+ $(this).val();
    });

</script>
</html>
