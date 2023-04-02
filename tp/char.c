#include <stdio.h>
#include <stdlib.h>
#include<string.h>
void main()
{
int m,i,d;

char mdp[10],log[20];
char mouh[8]="mous",lo[20]="mouhamed";
printf("donner votre login et votre mot de passe pour avoir acces à votre portable\n ***ATTENTION!!!!***  vous n'avez droit qu'à 10 tentatives\n  ");
printf("donner le login:");
scanf("%s",&log);
printf("donner le mdp:");
scanf("%s",&mdp);
m=strcmp(mdp,mouh);
d=strcmp(log,lo);
if(m==0 && d==0)

    printf("***BRAVO*** vous êtes connecte");
 if(m!=0 || d!=0){

for (i=1;i<=10;i++){
printf("il vous reste %d tentatives \n",10-i);
printf("donner le login:");
scanf("%s",log);
printf("donner le mdp:");
scanf("%s",&mdp);
m=strcmp(mdp,mouh);
d=strcmp(log,lo);
if(m==0 && d==0){
printf("***BRAVO***  mot de passe correct\n vous êtes connecté"); 
break;}
if(m!=0 || d!=0)
printf("***INCORRECT MYG***\n"); }

 }



}
