  function multiplicar(){
    const $total = document.getElementById('total');
    let subtotal = 1;
    [...document.getElementsByClassName( "valor" ) ].forEach( function ( element ) {
      if(element.value !== '') {
        subtotal *= parseFloat(element.value);
      }
    });

    if(subtotal==1){
        $total.value = subtotal-1;
    }else{
        $total.value = subtotal;
    }
    // $total.value = subtotal;
   
  }



  function  sumatotal(){
    const $suma_total = document.getElementById('suma_total');
    let subsumatotal = 0;
    [...document.getElementsByClassName( "valor2" ) ].forEach( function ( element ) {
      if(element.value !== '') {
        subsumatotal += parseFloat(element.value);
      }
    });

    $suma_total.value = subsumatotal;
   
  }

  

  
  document.addEventListener("DOMContentLoaded", function(event) {
    multiplicar();
    sumatotal();
  });
  

 