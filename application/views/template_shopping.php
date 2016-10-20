<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>{pagetitle}</title>
        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="/assets/css/default.css"/>
     </head>
    <body>
        <div class="container">
            {navbar}
            <div class='row'>
                <div class='col-md-9'>
                    <div class='row'>
                        <div class='col-md-4'>
                            {category1}
                        </div>
                        <div class='col-md-4'>
                            {category2}
                        </div>
                        <div class='col-md-4'>
                            {category3}
                        </div>
                    </div>
                </div>
                <div class='col-md-3'>
                    {receipt}
                </div>
            </div>
            {content}
            <p class="footer">Page rendered in <strong>0.0155</strong> seconds. 
                {ci_version}</p>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>