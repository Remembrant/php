require ('asd.php');

function hello(){

  $(document).ready(function(){

    $("#btnGreen").click(function(){
      alter('Hello ');
      console.log('Hello');
    })
  })


}
