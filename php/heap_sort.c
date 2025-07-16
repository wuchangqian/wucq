#include <stdio.h>
#include <stdlib.h>

void swap(int* a, int* b) {
    int temp = *b;
    *b = *a;
    *a = temp;
}

// 建立最大堆。
void max_heapify(int arr[], int start, int end) {
    //建立父节点指标和子节点指标
    int dad = start; // 父节点。
    int son = dad * 2 + 1; // 
    while (son <= end) { //若子节点指标在范围内才做比较。
        if (son + 1 <= end && arr[son] < arr[son + 1]){ //先比较两个子节点大小，选择最大的
            son++;
        }
        if (arr[dad] > arr[son]) { //如果父节点大于子节点代表调整完毕，直接跳出函数
            return;
        }else { //否则交换父子内容再继续子节点和孙节点比较
            swap(&arr[dad], &arr[son]);
            dad = son;
            son = dad * 2 + 1;
        }
    }
}
// 排序入口。
void heap_sort(int arr[], int len) {
    int i;
    //初始化，i从最后一个父节点（非叶子节点）开始调整
    for (i = len / 2 - 1; i >= 0; i--){
        max_heapify(arr, i, len - 1);
    }
    //先将第一个元素和已排好元素前一位做交换，再从新调整，直到排序完毕
    for (i = len - 1; i > 0; i--) {
        swap(&arr[0], &arr[i]);
        max_heapify(arr, 0, i - 1);// 递归调用
    }
}
// 
int main() {
    int arr[] = { 3, 15, 3, 110, 8, 6, 1, 5, 8, 6, 2, 4, 9, 40, 7, 0, 1, 8, 9, 7, 3, 1, 2, 5, 9, 7, 4, 0, 2, 6 };
    int len = (int) sizeof(arr) / sizeof(*arr);
    heap_sort(arr, len);
    int i;
    for (i = 0; i < len; i++){
        printf("%d ", arr[i]);
    }
    printf("\n");
    return 0;
}