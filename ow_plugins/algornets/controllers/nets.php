class ALGORNETS_CTRL_Nets extends OW_ActionController 
{ 
 public function index() 
    { 
        $this->setPageTitle(OW::getLanguage()->text('algornets', 'index_page_title')); 
        $this->setPageHeading(OW::getLanguage()->text('algornets', 'index_page_heading')); 
    } 
}
