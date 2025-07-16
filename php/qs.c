#include <stdio.h>
// arr 为待排序数组，[p,q] 用于指定排序区域
//严蔚敏《数据结构》标准分割函数
int Paritition1(int A[], int low, int high) {
    int pivot = A[low];
    while (low < high) {
      while (low < high && A[high] >= pivot) {
        --high;
      }
      A[low] = A[high];
      while (low < high && A[low] <= pivot) {
        ++low;
      }
      A[high] = A[low];
    }
    A[low] = pivot;
    return low;
  }
 
  void QuickSort(int A[], int low, int high) //快排母函数
  {
    if (low < high) {
      int pivot = Paritition1(A, low, high);
      QuickSort(A, low, pivot - 1);
      QuickSort(A, pivot + 1, high);
    }
  }

int main() {
    int i = 0;
   // int arr[10] = { 35,33,42,10,14,19,27,44,26,31 };
    int arr[10] = {1,2,1,1};
    //对于 arr 数组中所有元素进行快速排序
    QuickSort(arr, 0, 4);
    for (; i < 4; i++) {
        printf("%d ", arr[i]);
    }
    return 0;
}

