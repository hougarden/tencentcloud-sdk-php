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
 * @method string getType() 获取任务的类型，可以取的值有：
<li>Classification：智能分类</li>
<li>Cover：智能封面</li>
<li>Description：智能描述</li>
<li>Highlight：智能精彩片断</li>
<li>Tag：智能标签</li>
<li>FrameTag：智能按帧标签</li>
 * @method void setType(string $Type) 设置任务的类型，可以取的值有：
<li>Classification：智能分类</li>
<li>Cover：智能封面</li>
<li>Description：智能描述</li>
<li>Highlight：智能精彩片断</li>
<li>Tag：智能标签</li>
<li>FrameTag：智能按帧标签</li>
 * @method AiAnalysisTaskClassificationResult getClassificationTask() 获取视频内容分析智能分类任务的查询结果，当任务类型为 Classification 时有效。
 * @method void setClassificationTask(AiAnalysisTaskClassificationResult $ClassificationTask) 设置视频内容分析智能分类任务的查询结果，当任务类型为 Classification 时有效。
 * @method AiAnalysisTaskCoverResult getCoverTask() 获取视频内容分析智能封面任务的查询结果，当任务类型为 Cover 时有效。
 * @method void setCoverTask(AiAnalysisTaskCoverResult $CoverTask) 设置视频内容分析智能封面任务的查询结果，当任务类型为 Cover 时有效。
 * @method AiAnalysisTaskTagResult getTagTask() 获取视频内容分析智能标签任务的查询结果，当任务类型为 Tag 时有效。
 * @method void setTagTask(AiAnalysisTaskTagResult $TagTask) 设置视频内容分析智能标签任务的查询结果，当任务类型为 Tag 时有效。
 */

/**
 *智能分析结果
 */
class AiAnalysisResult extends AbstractModel
{
    /**
     * @var string 任务的类型，可以取的值有：
<li>Classification：智能分类</li>
<li>Cover：智能封面</li>
<li>Description：智能描述</li>
<li>Highlight：智能精彩片断</li>
<li>Tag：智能标签</li>
<li>FrameTag：智能按帧标签</li>
     */
    public $Type;

    /**
     * @var AiAnalysisTaskClassificationResult 视频内容分析智能分类任务的查询结果，当任务类型为 Classification 时有效。
     */
    public $ClassificationTask;

    /**
     * @var AiAnalysisTaskCoverResult 视频内容分析智能封面任务的查询结果，当任务类型为 Cover 时有效。
     */
    public $CoverTask;

    /**
     * @var AiAnalysisTaskTagResult 视频内容分析智能标签任务的查询结果，当任务类型为 Tag 时有效。
     */
    public $TagTask;
    /**
     * @param string $Type 任务的类型，可以取的值有：
<li>Classification：智能分类</li>
<li>Cover：智能封面</li>
<li>Description：智能描述</li>
<li>Highlight：智能精彩片断</li>
<li>Tag：智能标签</li>
<li>FrameTag：智能按帧标签</li>
     * @param AiAnalysisTaskClassificationResult $ClassificationTask 视频内容分析智能分类任务的查询结果，当任务类型为 Classification 时有效。
     * @param AiAnalysisTaskCoverResult $CoverTask 视频内容分析智能封面任务的查询结果，当任务类型为 Cover 时有效。
     * @param AiAnalysisTaskTagResult $TagTask 视频内容分析智能标签任务的查询结果，当任务类型为 Tag 时有效。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ClassificationTask",$param) and $param["ClassificationTask"] !== null) {
            $this->ClassificationTask = new AiAnalysisTaskClassificationResult();
            $this->ClassificationTask->deserialize($param["ClassificationTask"]);
        }

        if (array_key_exists("CoverTask",$param) and $param["CoverTask"] !== null) {
            $this->CoverTask = new AiAnalysisTaskCoverResult();
            $this->CoverTask->deserialize($param["CoverTask"]);
        }

        if (array_key_exists("TagTask",$param) and $param["TagTask"] !== null) {
            $this->TagTask = new AiAnalysisTaskTagResult();
            $this->TagTask->deserialize($param["TagTask"]);
        }
    }
}
