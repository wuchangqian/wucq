inoremap jk <ESC>
vnoremap jk <ESC>
nnoremap mk :marks<CR>
set autoread
set number
set sw=4
set ts=4
set ic
" colorscheme hybrid
" colorscheme solarized8_light
" ctrl+b 运行当前脚本
function! ExecuteCurrentFile()
  execute "w"
  let filename=expand('%:t')
  let extname=expand('%:e')
  if extname == 'js'
      execute "silent !node %:p 2>&1 | tee /tmp/vim_output_".filename
  else
      execute "silent !chmod +x %:p"
      execute "silent !%:p 2>&1 | tee /tmp/vim_output_".filename
  endif
  execute "split /tmp/vim_output_".filename
  " execute "redraw!"
endfunction

:nmap <leader>r :call ExecuteCurrentFile()<CR>
noremap <leader>i :source ~/.vimrc<CR>

noremap <c-b> :call ExecuteCurrentFile()<CR>
:nmap <leader>bgg :call ToggleBG()<CR>
let g:Lf_ShortcutF = '<c-p>'

