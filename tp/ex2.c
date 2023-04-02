#include<stdio.h>
#include<stdlib.h>
#include<string.h>
int main()
{
int i;
char first[20],sec[20];

printf("donner le premier mot:");
scanf("%s",&first);
printf("donner le deuxieme mot:");
scanf("%s",&sec);
for (i=0;i<strlen(first);i++)
  {
    if (first[i]>='A' && first[i]<='Z')
       first[i]=first[i]+32;
   }  

for (i=0;i<strlen(sec);i++)
  {
    if (sec[i]>='A' && sec[i]<='Z')
       sec[i]=sec[i]+32;
   } 
   printf("  %s  \n ",sec);
if (strcmp(sec,first)==0)
printf("les chaines de carectere sont identiques");
if (strcmp(sec,first)>0)
printf("la chaine %s vient avant la chaine %s \n ",sec,first);
if (strcmp(sec,first)<0)
printf(" la chaine %s vient apres la chaine %s ",sec,first);
}
           
