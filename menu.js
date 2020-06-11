var menu=new Array(); 
var link=new Array(); 

menu[0]="Информация"; 
link[0]="#info"; 
menu[1]="Правила сервера"; 
link[1]="#rules"; 
menu[2]="Купить"; 
link[2]="#buy";      
menu[3]="Связь"; 
link[3]="#service";


document.write('<div class="next">'); 
for (var i=0; i<menu.length; i++){ 
document.write('<a href="'+link[i]+'">'+menu[i]+'</a> '); 
if (i+1<menu.length) document.write('   '); 

} 
document.write('</div>');
