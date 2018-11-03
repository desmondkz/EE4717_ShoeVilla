function getProductInfo(input){
    console.log('getProduct');
    $(input).parents("li").find("button[class=getProduct]").click();
}