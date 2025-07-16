#include<iostream>
#include<list>
// using namespace std;
using namespace std;

void fn1(){
    list<char> l = {'l' , 'c' ,'d'};
    cout<<l.front()<<endl;
}

// int main(int argc ,char** args )
int main()
{
    //cout<<"wcq";
    vector<char> v(100);//= {'a','b','c','3'};
    v.push_back('n');
    cout<<v.size()<<"\n"<<v.capacity()<<endl;
    fn1();
    return 0;
}