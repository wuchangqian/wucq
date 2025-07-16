#include<stdio.h>

void swap(int *a , int *b){
    int tmp = *b;
    *b = *a;
    *a = tmp;
}
void heap(int ary[] , int root , int len){
    int parent = root;
    int son = root * 2 + 1;
    while(son <= len){
        if(son + 1 <= len && ary[son] < ary[son+1] ){
            son++;
        }
        if(ary[parent] > ary[son]){
            return;
        }else{
            swap(&ary[son] , &ary[parent]);
            parent = son;
            son = parent * 2 + 1;
        }
    }
}

void heap_sort(int ary[] , int len){
    // 构建大顶堆
    for(int i = (len/2)-1 ; i >= 0 ; i--){
        heap(ary , i , len-1);
    }
    // 
    for (int i = len - 1; i > 0; i--) {
        swap(&ary[0], &ary[i]);
        heap(ary, 0, i - 1);
    }
}

int main(int argc , char ** argv){
    int ary[] = {10,2,5,1,2,6,7,9,0,11,1234,44};
    // int ary[] = {2,3,1,4};
    int len = sizeof(ary) / sizeof(ary[0]);
    // printf("$ %d $$\n" , len);
    heap_sort(ary , len);
    for(int i = 0 ; i < len ; i++){
        printf(" [%d]" , ary[i]);
    }
    return 0;
}