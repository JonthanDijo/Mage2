<?php
namespace MK\SamplePage\Controller\Index;
class home extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory)

    {
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    // public function execute()
    // {
    //     echo "Hello world";
    //     exit;
    // }

        public function execute ()
        {
            return $this->_pageFactory->create();
        }
}
