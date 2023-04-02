#include <stdio.h>
int main()
{
int i,x,index,a,b,k,n,j,p;
a=17;
b=11;
p=0;
if (a>b)
p=a+1;
else
p=b+1;

while ((p/a)!=0 || p/b!=0 )
p++;
printf("%d",p);
}
