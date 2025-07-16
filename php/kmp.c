#include<stdio.h>
#include<string.h>
const int N=1000,M=10000;
void getnext(char *a,int *next);
int kmp(char *a,char *b,int *next);//a 模板串，b目标串
int main(){
    char a[N],b[M];
    int next[N];
    scanf("%s %s",a,b);
    getnext(a,next);
    printf("%d",kmp(a,b,next));
}
int kmp(char *a,char *b,int *next)
{
    int i=0,j=0;//j-a,i-b
    int len1=strlen(a);
    int len2=strlen(b);
    while(i<len2){
        if(j==-1||a[j]==b[i]){
            i++;
            j++;
        }
        else{
            j=next[j];
        }
        if(j==len1)return i-len1;
    }
    return -1;
}
void getnext(char *a,int *next){    
    int len=0;
    int i=0,j=-1;
    next[0]=-1;
    len=strlen(a);
    while(i<len)
    {
        if(j==-1||a[i]==a[j]){
            i++;
            j++;
            next[i]=j;
        }
        else{
            j=next[j];
        }
    }
}

