#include<stdio.h>
int max_2( int A,int B)
{ int max;
    max=A;
    if(max<B)
    {
        max=B;
    }
return max;
}

int max_4( int n1,int n2,int n3,int n4)
{int max1,max2,max3;

   max1=max_2(n1,n2);
   max2=max_2(n3,n4);
   max3=max_2(max1,max2);
return max3;
}
int main()
{int n1,n2,n3,n4;
    printf("entrez 4 nombre");
    scanf("%d%d%d%d",&n1,&n2,&n3,&n4);
    printf("le maximum est %d",max_4(n1,n2,n3,n4));
}

