#include<stdio.h>
int valid_rec(){
  int nb ;
  printf("Donner n:\n");
  scanf("%d",&nb);
if (nb>0)
	return nb;
else 
 valid_rec();
}
int validation_iterative()
{
 int nb;
 do 
{
printf("Entrer un nombre\n");
scanf("%d",&nb);
}
while (nb<0);

return nb;
}

int fact( int n)
 {
 
if (n==1 || n==0)

 {
return 1;
 }
else 
	if ( n>1 )
{
return n*fact(n-1);
}

}
void affiche_fact(int n){
	printf("\n fact de %d = %d\n", n, fact(n));
}

int main(){
	int val1,val2;
	
	val1=validation_iterative();
	val2=valid_rec();
	affiche_fact(val1);
	affiche_fact(val2);
	
	
	return 0;
}
