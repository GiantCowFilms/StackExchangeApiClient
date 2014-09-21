<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\InboxItemInterface;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\SiteInterface;
use BenatEspina\StackExchangeApiClient\Model\Traits\GenericIdTrait;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class InboxItem.
 *
 * @package BenatEspina\StackExchangeApiClient\Model
 */
class InboxItem implements InboxItemInterface
{
    use GenericIdTrait;

    const ITEM_TYPE_CAREERS_INVITATIONS = 'careers_invitations';
    const ITEM_TYPE_CAREERS_MESSAGE = 'careers_message';
    const ITEM_TYPE_CHAT_MESSAGE = 'chat_message';
    const ITEM_TYPE_COMMENT = 'comment';
    const ITEM_TYPE_META_QUESTION = 'meta_question';
    const ITEM_TYPE_MODERATOR_MESSAGE = 'moderator_message';
    const ITEM_TYPE_NEW_ANSWER = 'new_answer';
    const ITEM_TYPE_POST_NOTICE = 'post_notice';

    /**
     * Comment id.
     *
     * @var int|null
     */
    protected $commentId;

    /**
     * Creation date.
     *
     * @var \DateTime
     */
    protected $creationDate;

    /**
     * Boolean that shows if inbox item is unread or not.
     *
     * @var boolean
     */
    protected $isUnread;

    /**
     * Item type that can be 'comment', 'chat_message', 'new_answer', 'careers_message',
     * 'careers_invitations', 'meta_question', 'post_notice', or 'moderator_message'
     *
     * @var string
     */
    protected $itemType;

    /**
     * The link.
     *
     * @var string
     */
    protected $link;

    /**
     * The site.
     *
     * @var \BenatEspina\StackExchangeApiClient\Model\Interfaces\SiteInterface|null
     */
    protected $site;

    /**
     * The title.
     *
     * @var string
     */
    protected $title;

    /**
     * Constructor.
     *
     * @param null|(int|string)[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        $this->loadGenericId($json);

        $this->commentId = Util::setIfExists($json, 'comment_id');
        $this->creationDate = Util::setIfDateTimeExists($json, 'creation_date');
        $this->isUnread = Util::setIfExists($json, 'is_unread');
        $this->itemType = Util::isEqual(
            $json,
            'item_type', 
            array(
                self::ITEM_TYPE_CAREERS_INVITATIONS,
                self::ITEM_TYPE_CAREERS_MESSAGE,
                self::ITEM_TYPE_CHAT_MESSAGE,
                self::ITEM_TYPE_COMMENT,
                self::ITEM_TYPE_META_QUESTION,
                self::ITEM_TYPE_MODERATOR_MESSAGE,
                self::ITEM_TYPE_NEW_ANSWER,
                self::ITEM_TYPE_POST_NOTICE
            )
        );
        $this->link = Util::setIfExists($json, 'link');
        $this->site = new Site(Util::setIfExists($json, 'site'));
        $this->title = Util::setIfExists($json, 'title');
    }

    /**
     * {@inheritdoc}
     */
    public function setCommentId($commentId)
    {
        $this->commentId = $commentId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCommentId()
    {
        return $this->commentId;
    }

    /**
     * {@inheritdoc}
     */
    public function setCreationDate(\DateTime $creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * {@inheritdoc}
     */
    public function setIsUnread($isUnread)
    {
        $this->isUnread = $isUnread;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function isUnread()
    {
        return $this->isUnread;
    }

    /**
     * {@inheritdoc}
     */
    public function setItemType($itemType)
    {
        if (Util::coincidesElement(
            $itemType,
            array(
                self::ITEM_TYPE_CAREERS_INVITATIONS,
                self::ITEM_TYPE_CAREERS_MESSAGE,
                self::ITEM_TYPE_CHAT_MESSAGE,
                self::ITEM_TYPE_COMMENT,
                self::ITEM_TYPE_META_QUESTION,
                self::ITEM_TYPE_MODERATOR_MESSAGE,
                self::ITEM_TYPE_NEW_ANSWER,
                self::ITEM_TYPE_POST_NOTICE
            )
        )) {
            $this->itemType = $itemType;
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getItemType()
    {
        return $this->itemType;
    }

    /**
     * {@inheritdoc}
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * {@inheritdoc}
     */
    public function setSite(SiteInterface $site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * {@inheritdoc}
     */
    public function setTitle($title)
    {
        $this->title = $title;
        
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        return $this->title;
    }
}
