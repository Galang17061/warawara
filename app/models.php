<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// master
use App\m_mem;
use App\model\master\m_category_event;
use App\model\master\m_category_news;
use App\model\master\m_category_puisi;
use App\model\master\m_category_shop;
use App\model\master\m_setting_carousel;
// funsi
use App\model\functions\shop\d_shop;
use App\model\functions\shop\d_shop_image;

use App\model\functions\event\d_event;
use App\model\functions\event\d_event_like;
use App\model\functions\event\d_event_interest;
use App\model\functions\event\d_event_comment;
use App\model\functions\event\d_event_comment_dt;

use App\model\functions\news\d_news;
use App\model\functions\news\d_news_like;
use App\model\functions\news\d_news_interest;
use App\model\functions\news\d_news_comment;
use App\model\functions\news\d_news_comment_dt;

use App\model\functions\puisi\d_puisi;


class models extends model
{
  public function m_mem()
  {
      $m_mem = new m_mem(); 

      return $m_mem;
  }
  public function m_category_event()
  {
      $m_category_event = new m_category_event(); 

      return $m_category_event;
  }
  public function m_category_news()
  {
      $m_category_news = new m_category_news(); 

      return $m_category_news;
  }
  public function m_category_puisi()
  {
      $m_category_puisi = new m_category_puisi(); 

      return $m_category_puisi;
  }
  public function m_category_shop()
  {
      $m_category_shop = new m_category_shop(); 

      return $m_category_shop;
  }
  public function m_setting_carousel()
  {
      $m_setting_carousel = new m_setting_carousel(); 

      return $m_setting_carousel;
  }
  public function d_shop()
  {
      $d_shop = new d_shop(); 

      return $d_shop;
  }
  public function d_shop_image()
  {
      $d_shop_image = new d_shop_image(); 

      return $d_shop_image;
  }
  public function d_event()
  {
      $d_event = new d_event(); 

      return $d_event;
  }
  public function d_event_like()
  {
      $d_event_like = new d_event_like(); 

      return $d_event_like;
  }
  public function d_event_interest()
  {
      $d_event_interest = new d_event_interest(); 

      return $d_event_interest;
  }
  public function d_event_comment()
  {
      $d_event_comment = new d_event_comment(); 

      return $d_event_comment;
  }
  public function d_event_comment_dt()
  {
      $d_event_comment_dt = new d_event_comment_dt(); 

      return $d_event_comment_dt;
  }
  public function d_news()
  {
      $d_news = new d_news(); 

      return $d_news;
  }
  public function d_news_comment()
  {
      $d_news_comment = new d_news_comment(); 

      return $d_news_comment;
  }
  public function d_news_comment_dt()
  {
      $d_news_comment_dt = new d_news_comment_dt(); 

      return $d_news_comment_dt;
  }
  public function d_news_like()
  {
      $d_news_like = new d_news_like(); 

      return $d_news_like;
  }
  public function d_news_interest()
  {
      $d_news_interest = new d_news_interest(); 

      return $d_news_interest;
  }
  public function d_puisi()
  {
      $d_puisi = new d_puisi(); 

      return $d_puisi;
  }
}