<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" >

    <title>PHP Pattrn</title>
  </head>
  <body>
  <h1>PHP Pattrn</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-3" style="border:solid">
            <h3>1</h3>
            <?php
                $n = 5;
                for ($i=0; $i < $n; $i++) { 
                    for ($j=0; $j <= $i; $j++) { 
                        echo " * ";
                    }
                    echo "<br/>";
                }
            ?>
            <hr>
            <p>
            $n = 5;<br>
            for ($i=0; $i < $n; $i++) { <br>
                for ($j=0; $j <= $i; $j++) { <br>
                    echo " * "; <br>
                } <br>
                echo "<'br/'>"; <br>
            }
            </p>
            </div>
            <div class="col-sm-2" style="border:solid"><h3>2</h3>
            <?php
                $n = 5;
                for ($i=0; $i < $n; $i++) { 
                    for ($j=$i; $j < $n; $j++) { 
                        echo " * ";
                    }
                    echo "<br/>";
                }
            ?>
            </div>
            <div class="col-sm-2" style="border:solid"><h3>3</h3>
            <?php
                $n = 5;
                for ($i=0; $i < $n; $i++) { 
                    for ($j=0; $j <= $i; $j++) { 
                        echo " * ";
                    }
                    echo "<br/>";
                }
            ?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
  </body>
</html>
