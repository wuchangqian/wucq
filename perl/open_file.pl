@ary=1..20;
#print 5**4;
# print @ary;
# print "\n";
# print $ary[10];
%{wcq}='qianqian3333';
# print ${wcq};
# exit;
open F , '+<:encoding(UTF-8)' , './open_file.pl';

while (<F>){
    chomp;
    print;
}
close F;
