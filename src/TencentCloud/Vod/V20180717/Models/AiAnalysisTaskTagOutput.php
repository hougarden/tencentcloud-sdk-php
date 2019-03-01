<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method MediaAiAnalysisTagItem getTagSet() 获取视频智能标签列表。
 * @method void setTagSet(MediaAiAnalysisTagItem $TagSet) 设置视频智能标签列表。
 */

/**
 *智能标签结果信息
 */
class AiAnalysisTaskTagOutput extends AbstractModel
{
    /**
     * @var MediaAiAnalysisTagItem 视频智能标签列表。
     */
    public $TagSet;
    /**
     * @param MediaAiAnalysisTagItem $TagSet 视频智能标签列表。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = new MediaAiAnalysisTagItem();
            $this->TagSet->deserialize($param["TagSet"]);
        }
    }
}
