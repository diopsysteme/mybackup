#include<stdio.h>
int fact( int n)
{int i;

    for(i=1;i<n;i++){
    n=n*n;}

return n;
}

int sommefact( int n)

{int s,i;
for(i=0;i<=n;i++){

        s=s+fact(n);}


return s;
}
int main()
{
    int n;
    printf("entrez nombre\n");
    scanf("%d",&n);
    printf("le factoriel  de %d est %d et la somme factoriel est %d",n,fact(n),sommefact(n));
}
