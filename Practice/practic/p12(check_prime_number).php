

        <?php

        // check if the number is prime or not

        function check(int $number){
            for($i=2;$i<$number;$i++){
                if(($number% $i)==0){
                    return 0;
                
                }
            }
            return 1;
        }

       


    
