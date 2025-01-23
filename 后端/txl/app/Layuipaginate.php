<?php


namespace app;

use think\Paginator;

class Layuipaginate extends Paginator
{  
  
    //首页  
    protected function home() {  
        if ($this->currentPage() > 1) {  
            return "<a href='" . $this->url(1) . "' title='首页'>首页</a>";  
        } else {  
            return "<p>首页</p>";  
        }  
    }  
  
    //上一页  
    protected function prev() {  
        if ($this->currentPage() > 1) {  
            return "<a href='" . $this->url($this->currentPage - 1) . "' title='上一页'>上一页</a>";  
        } else {  
            return "<p>上一页</p>";  
        }  
    }  
  
    //下一页  
    protected function next() {  
        if ($this->hasMore) {  
            return "<a href='" . $this->url($this->currentPage + 1) . "' title='下一页'>下一页</a>";  
        } else {  
            return"<p>下一页</p>";  
        }  
    }  
  
                );  
            }  
        }  
    }  
            .pagination p.pageRemark b{  
                color:red;  
            }  
            .pagination p.pageEllipsis{  
                border-style:none;  
                background:none;  
                padding:4px 0px;  
                color:#808080;  
            }  
            .dates li {font-size: 14px;margin:20px 0}  
            .dates li span{float:right}  
        </style>';  
    }  
}  
