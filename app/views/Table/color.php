<h1 class="text-center">Урок 2</h1>

<h3 class="text-center">Таблица умножения от 1 до 10 в цвете - 4 варианта выполнения</h3>

<hr>
<h3 class="text-center">1 - str_replace()</h3>
<table class="table table-black">
    <?php 
        $out = '<tbody><tr>'; 
        for($i=1; $i<=5; $i++){
            $out .= '<td>';
            for($k=1; $k<=10; $k++){
                $out .= $i . " &times; " . $k . " = " . $i*$k . "<br>";    
            }
            $out .= '</td>';            
        }        
        $out .= '</tr>';    
        $out .= '<tr>'; 
        for($i=6; $i<=10; $i++){
            $out .= '<td>';
            for($k=1; $k<=10; $k++){
                $out .= $i . " &times; " . $k . " = " . $i*$k . "<br>";    
            }
            $out .= '</td>';            
        }        
        $out .= '</tr></tbody>'; 
    
        $out = str_replace("1", "<span class='text-danger font-weight-bold'>1</span>", $out);
        $out = str_replace("2", "<span class='text-success font-weight-bold'>2</span>", $out);
        $out = str_replace("3", "<span class='text-warning font-weight-bold'>3</span>", $out);
        $out = str_replace("4", "<span class='text-primary font-weight-bold'>4</span>", $out);

        echo $out;
    ?>    
</table>  

<hr>
<h3 class="text-center">2 - foreach()</h3>
<table class="table table-black">
    <?php 
        $out = '<tbody><tr>'; 
        for($i=1; $i<=5; $i++){
            $out .= '<td>';
            for($k=1; $k<=10; $k++){
                $out .= $i . " &times; " . $k . " = " . $i*$k . "<br>";    
            }
            $out .= '</td>';            
        }        
        $out .= '</tr>';    
        $out .= '<tr>'; 
        for($i=6; $i<=10; $i++){
            $out .= '<td>';
            for($k=1; $k<=10; $k++){
                $out .= $i . " &times; " . $k . " = " . $i*$k . "<br>";    
            }
            $out .= '</td>';            
        }        
        $out .= '</tr></tbody>'; 

        $arr = str_split($out);
            
        foreach($arr as $key => $value){

            if($value === '1'){                
                $arr[$key] = "<span class='text-danger font-weight-bold'>1</span>";                
            }elseif($value === '2'){
                $arr[$key] = "<span class='text-success font-weight-bold'>2</span>";
            }elseif($value === '3'){
                $arr[$key] = "<span class='text-warning font-weight-bold'>3</span>";
            }elseif($value === '4'){
                $arr[$key] = "<span class='text-primary font-weight-bold'>4</span>";
            }
        }

        $out = implode('', $arr);

        echo $out;
    ?>    
</table>  

<hr>
<h3 class="text-center">3 - preg_replace()</h3>
<table class="table table-black">
    <?php 
        $out = '<tbody><tr>'; 
        for($i=1; $i<=5; $i++){
            $out .= '<td>';
            for($k=1; $k<=10; $k++){
                $out .= $i . " &times; " . $k . " = " . $i*$k . "<br>";    
            }
            $out .= '</td>';            
        }        
        $out .= '</tr>';    
        $out .= '<tr>'; 
        for($i=6; $i<=10; $i++){
            $out .= '<td>';
            for($k=1; $k<=10; $k++){
                $out .= $i . " &times; " . $k . " = " . $i*$k . "<br>";    
            }
            $out .= '</td>';            
        }        
        $out .= '</tr></tbody>'; 
    
        $out = preg_replace("/1/", "<span class='text-danger font-weight-bold'>1</span>", $out);
        $out = preg_replace("/2/", "<span class='text-success font-weight-bold'>2</span>", $out);
        $out = preg_replace("/3/", "<span class='text-warning font-weight-bold'>3</span>", $out);
        $out = preg_replace("/4/", "<span class='text-primary font-weight-bold'>4</span>", $out);

        echo $out;
    ?>    
</table> 

<hr>
<h3 class="text-center">4 - switch()</h3>
<table class="table table-black mb-4">
    <?php 
        $out = '<tbody><tr>'; 
        for($i=1; $i<=5; $i++){
            $out .= '<td>';
            for($k=1; $k<=10; $k++){
                $out .= $i . " &times; " . $k . " = " . $i*$k . "<br>";    
            }
            $out .= '</td>';            
        }        
        $out .= '</tr>';    
        $out .= '<tr>'; 
        for($i=6; $i<=10; $i++){
            $out .= '<td>';
            for($k=1; $k<=10; $k++){
                $out .= $i . " &times; " . $k . " = " . $i*$k . "<br>";    
            }
            $out .= '</td>';            
        }        
        $out .= '</tr></tbody>'; 
        
        $arr = str_split($out);

        foreach($arr as $key => $value){

            switch ($value) {
                case 1:
                    $arr[$key] = "<span class='text-danger font-weight-bold'>1</span>";
                    break;
                case 2:
                    $arr[$key] = "<span class='text-success font-weight-bold'>2</span>";
                    break;
                case 3:
                    $arr[$key] = "<span class='text-warning font-weight-bold'>3</span>";
                    break;
                case 4:
                    $arr[$key] = "<span class='text-primary font-weight-bold'>4</span>";
                    break;
            }           
        }

        $out = implode('', $arr);        

        echo $out;
    ?>    
</table>  