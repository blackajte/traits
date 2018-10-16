<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Draftable;

interface DraftableInterface
{
    /**
     * Get Draft
     *
     * @return bool
     */
    public function getDraft();

    /**
     * Set Draft
     *
     * @param bool $draft
     * @return self
     */
    public function setDraft(?bool $draft = false);
}
