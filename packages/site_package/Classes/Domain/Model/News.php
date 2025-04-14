<?php
namespace Vendor\SitePackage\Domain\Model;

use GeorgRinger\News\Domain\Model\News as BaseNews;

class News extends BaseNews
{
    /** @var string */
    protected $txMyextQuote = '';

    public function getTxMyextQuote(): string
    {
        return $this->txMyextQuote ?? '';
    }

    public function setTxMyextQuote(string $quote): void
    {
        $this->txMyextQuote = $quote;
    }
}
