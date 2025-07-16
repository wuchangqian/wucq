#include<stdio.h>

int main(){
    int ary[] = {6,2,3,5,6,1,7,9};
    int size = 8;//sizeof(ary)/sizeof(ary[0]);
    int i , j , tmp;

    for(i = 0 ; i < size-1 ; i++){
        printf("------开始第%d轮-----\n" , i+1);
        for(j = 0 ; j < size - 1 - i ; j++){
            printf("比较: 第%d 和 %d 的大小\n" , j , j+1 );
            if(ary[j]  > ary[j+1]){
                tmp      = ary[j];
                ary[j]   = ary[j+1];
                ary[j+1] = tmp;
            }
        }
        printf("-----结束第%d轮------\n" , i+1);
    }

    for(i=0 ; i < size; i++){
        printf("%d  " , ary[i]);
    }

    printf("\n\n\n\n");
    return 1;
}