<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Function</title>
  <style>
  
  h1{
    text-decoration: underline;
  }
  
  
  </style>
  </head>
  <body>
    <h1>PHP Function</h1>
    
    <h3>Inputting Date:</h3>
    <?php echo date ("l d, Y") ?>
    
    <hr>
    
    <h3>This date will show international:</h3>
    <?php 
      /* default timezone is irrelevant; timezone taken from the object */
      ini_set('date.timezone', 'UTC');
      /* default locale is taken from this ini setting */
      ini_set('intl.default_locale', 'fr_FR');
    
        $cal = IntlCalendar::fromDateTime("2013-06-06 17:05:06 Europe/Dublin");
      ?>
      <p>
      <?php
        echo "default:\n\t",
        IntlDateFormatter::formatObject($cal),
        "\n";
      ?>
      </p>
      <p>  
      <?php
        echo "string \$format (d 'of' MMMM y):\n\t",
        IntlDateFormatter::formatObject($cal, "d 'of' MMMM y", 'en_US'),
        "\n"; 
      ?>
    </p>
    
    <hr>
    
    <h3>Displaying the number of characters in this sentence:</h3>
    <br></br>
    <p><b>Hello fri3nd, you're
       looking          good today!</b></p>
    <?php  
    
    $str = "Hello fri3nd, you're
       looking          good today!";
    
    ?>
    <p>
    <?php
    print_r(str_word_count($str, 1));
    ?>
    </p>
    <p>
    <?php 
    print_r(str_word_count($str, 2));
    ?>
    </p>
    <p>
      <?php
    print_r(str_word_count($str, 1, 'àáãç3'));
    ?>
    </p>
    <p>
    <?php
    echo str_word_count($str);
    ?>
    </p>
    
    <br></br>
    
    <h3>Displaying a sentence that will show the trim inside of the sentence:</h3>
    
    <p>
    <?php
    $hello = "Hello World";
    var_dump($hello); 
    
    print "\n";   
    ?>  
    </p>
    <p>
    <?php  
    $trimmed = trim($hello, "Hdle");
    var_dump($trimmed);
    ?>
    </p>
    <p>
    <?php
    $trimmed = trim($hello, 'HdWr');
    var_dump($trimmed);
    ?>
  </p>
  
  <br></br>
  
  <h3>Displaying Dmacc all Lower case:</h3>
  <p>
  <?php  
  $str = "Dmacc";
  $str = strtolower($str);
  echo $str; 
  ?>
  </p>
  
  <br></br>
  
  <h3>Displays UPPER or LOWER cases:</h3>
  <p>
  <?php
  $strings = array('DM4CC', 'DMACC', 'Dmacc');
  foreach ($strings as $testcase) {
    if (ctype_upper($testcase)) {
        echo "$testcase consists of all uppercase letters.\n";
    } 
    else {
        echo "$testcase does not consist of all uppercase letters.\n";
    }
    }
    ?>
    </p>
    
    <hr>
    
    <h3>Displaying the number format:</h3>
    <br></br>
    
    <p>
    <?php
    $number = 1234567890;
  
    // english notation (default)
    $english_format_number = number_format($number);
    // 1,235
    ?>
    </p>
    <p>
    <?php
    // French notation
    $nombre_format_francais = number_format($number, 2, ',', ' ');
    // 1 234,56
    ?>
    </p>
    <p>
    <?php  
    $number = 12345.67890;

    // english notation without thousands separator
    $english_format_numbers = number_format($number, 2, '.', '');
    // 1234.57
    ?>
    </p>
    
    <p><?php echo $english_format_number ?></p>
    <p><?php echo $nombre_format_francais ?></p>
    <p><?php echo $english_format_numbers ?></p>
    
    <hr>
    
    <h3>Displaying the US Currency:</h3>
    <p>
    <?php 
    $number = 1234.56;
    setlocale(LC_MONETARY, 'en_US');
echo money_format('%(#10n', $number) . "\n";
     ?>
   </p>
  </body>
</html>