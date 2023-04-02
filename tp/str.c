 #include<stdio.h>
#include<stdlib.h>
#include<string.h>
/*#include"str.h"*/
int main()

{

typedef struct
{

char nom[200];
char prenom[200];
char sex[200];
float nmaths ;
float nalgo ;
float nsgbd ;
float neconomi ;
float nreseau;
float dsalgo;
float dssgbd;
float dseconomi;
float dsmaths;
float dsreseau;
float nm;
float na;
float ne;
float ns;
float moye;
}etudiant;
typedef etudiant classe[100];


  classe dstid;
  int n,i;
  
  do {
  printf("donner le nombre de students:");
  scanf("%d",&n);
  }
  while((n<=0)||(n>=200));
  
  for(i=0;i<n;++i)
  {
   printf("donner le nom de l'etudiant number%d:",i+1);
   scanf("%s",dstid[i].nom);
   printf("donner le prenom de l'etudiant number%d:",i+1);
   scanf("%s",dstid[i].prenom);
  /* printf("donner le sexe de l'etudiant number:%d:",i+1);
   scanf("%s",dstid[i].sex);*/
   printf("donner les notes en maths de l'etudiant%d \nEN CONTROLE CONTINU:",i+1);
   scanf("%f",&dstid[i].nmaths);
   printf("EN EXAM:");
   scanf("%f",&dstid[i].dsmaths);
   printf("donner les notes en  economi de l'etudiant%d\nEN CONTROLE CONTINU:",i+1);
   scanf("%f",&dstid[i].neconomi);
   printf("EN EXAM:");
   scanf("%f",&dstid[i].dseconomi);
   printf("EN EXAM:");
   printf("donner les notes en  sgbd de l'etudiant%d\nEN CONTROLE CONTINU:",i+1);
   scanf("%f",&dstid[i].nsgbd);
   printf("EN EXAM:");
   scanf("%f",&dstid[i].dssgbd);
   printf("donner les notes en algo  de l'etudiant%d\nEN CONTROLE CONTINU:",i+1);
   scanf("%f",&dstid[i].nalgo);
   printf("EN EXAM:");
   scanf("%f",&dstid[i].dsalgo);
   printf("donner les notes en  reseau de l'etudiant%d\nEN CONTROLE CONTINU:",i+1);
   scanf("%f",&dstid[i].nreseau);
   printf("EN EXAM:");
   scanf("%f",&dstid[i].dsmaths);
   
    
  }
  /*printf("\n voici les noms\n\n");	
  for(i=0;i<n;i++)
   printf("%s %s de sexe  %s \n *** voici ses note***\nen algo:%.2f\nen sgbd:%.2f\nen maths:%.2f\nen economi:%.2f\n",dstid[i].prenom,dstid[i].nom,dstid[i].sex,dstid[i].nalgo,dstid[i].nsgbd,dstid[i].nmaths,dstid[i].neconomi);*/

   /*moy(dstid->nmaths,dstid->nalgo,dstid->neconomi,dstid->nsgbd,i,n,nm,na,ne,ns,moye);*/
   
   for(i=0;i<n;++i)
 {
 dstid[i].na=dstid[i].nalgo*4;
 dstid[i].nm=dstid[i].nmaths*5;
 dstid[i].ns=dstid[i].nsgbd*4;
 dstid[i].ne=dstid[i].neconomi*2;}
 for(i=0;i<n;++i)
 
 dstid[i].moye=(dstid[i].na+dstid[i].nm+dstid[i].ns+dstid[i].ne)/15;

   for(i=0;i<n;++i)
   {
   printf ("la moyenne de l'etudiant %s %s est:%.2f\n",dstid[i].prenom,dstid[i].nom,dstid[i].moye);
   }
    }
   
[i]   
  