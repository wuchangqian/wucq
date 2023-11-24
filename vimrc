inoremap jk <ESC>
vnoremap jk <ESC>
nnoremap mk :marks<CR>
set autoread
set number
" colorscheme hybrid
" colorscheme solarized8_light
" ctrl+b 运行当前脚本
function! ExecuteCurrentFile()
  execute "w"
  let filename=expand('%:t')
  let extname=expand('%:e')
  if extname == 'js'
      execute "silent !node %:p 2>&1 | tee ~/.vim/tmp/output_".filename
  else
      execute "silent !chmod +x %:p"
      execute "silent !%:p 2>&1 | tee ~/.vim/tmp/output_".filename
  endif
  execute "split ~/.vim/tmp/output_".filename
  " execute "vsplit ~/.vim/tmp/output_".n
  " execute "redraw!"
endfunction

:nmap <leader>r :call ExecuteCurrentFile()<CR>
noremap <c-b> :call ExecuteCurrentFile()<CR>
:nmap <leader>bg :call ToggleBG()<CR>
let g:Lf_ShortcutF = '<c-p>'
" echom "每天都要对自己好点..."
