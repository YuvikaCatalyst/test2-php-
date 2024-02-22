$(document).ready(function(){

$('.createAccount').click(function(e){
    e.preventDefault();
    var firstname=$('.firstname').val();
    var lastname=$('.lastname').val();
    var newPassword=$('.newPassword').val();
    var confirmPassword=$('.confirmPassword').val();

    $.ajax({
        type:'POST',
        url:'userVerify.php',
        data:{
            firstname:firstname,
            lastname:lastname,
            newPassword:newPassword,
            confirmPassword:confirmPassword
        },
        success:function(response){
            alert(response);
                }
    })
});

$('.login').click(function(e){
   e.preventDefault();
var username=$('.username').val();

var login_password=$('.login_password').val();

 $.ajax({
    type:'POST',
    url:'userLogin.php',
    data:{
        username:username,
        login_password:login_password
    },
   success:function(response){
        if(response == 1){
            window.open('user_data.php');
        }
        else{
            alert(response);
        }
    }
 })

});


$('select#logoType').change(function(){
    var type=$('#logoType').children('option:selected').val();
   if(type=="text"){
    $('.logoText').css('display','block');
    $('.logoFile').css('display','none');
   }
   else if(type=="image"){
    $('.logoText').css('display','none');
    $('.logoFile').css('display','block');
   }
});

$(window).on('load',function(){
    var type=$('#logoType').children('option:selected').val();
    alert(type);
    if(type=="text"){
     $('.logoText').css('display','block');
     $('.logoFile').css('display','none');
    }
    else if(type=="image"){
     $('.logoText').css('display','none');
     $('.logoFile').css('display','block');
    }
});



$('.submitData').click(function(e){
    e.preventDefault();
var logoType=$('#logoType').val();
var logoText=$('.logoText').val();
var navitem1=$('.navitem1').val();
var navitem2=$('.navitem2').val();
var navitem3=$('.navitem3').val();
var navitem4=$('.navitem4').val();
var navitem5=$('.navitem5').val();
var btn1=$('.btn1').val();
var bannerHeading=$('.bannerHeading').val();
var btn2=$('.btn2').val();
var btn3=$('.btn3').val();

var formData=new FormData();
formData.append('logoType',logoType);
formData.append('logoText',logoText);
formData.append('navitem1',navitem1);
formData.append('navitem2',navitem2);
formData.append('navitem3',navitem3);
formData.append('navitem4',navitem4);
formData.append('navitem5',navitem5);
formData.append('btn1',btn1);
formData.append('bannerHeading',bannerHeading);
formData.append('btn2',btn2);
formData.append('btn3',btn3);
var logoFile=$('.logoFile')[0].files[0];
formData.append('logoFile',logoFile);
var bannerImage=$('.bannerImage')[0].files[0];
formData.append('bannerImage',bannerImage);


$.ajax({
    type:'POST',
    url:'formdata.php',
    contentType:false,
    processData:false,
    data:formData,
    success:function(response){
alert(response);
    }
})
});

});