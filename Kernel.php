<?php

namespace App\Console;use Illuminate\Console\Scheduling\Schedule;use Illuminate\Foundation\Console\Kernel as ConsoleKernel;class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
       \App\Console\Commands\Tool\DoSuperEditReqCommand::class,
       \App\Console\Commands\Tool\CopyPostBackEndCommand::class,
       \App\Console\Commands\Tool\CopyPostFromExcelCommand::class,
       \App\Console\Commands\Tool\HelpFillCopyPostExcelCommand::class,
       \App\Console\Commands\PayAllowanceCommand::class,
       \App\Console\Commands\CreateAllowanceOrderCommand::class,
       \App\Console\Commands\Pixiu\PixiuOfflineCountCommand::class,
       \App\Console\Commands\UpdateJobDateTypeCommand::class,
       \App\Console\Commands\Pixiu\LoadStrategyCommand::class,
       \App\Console\Commands\Pixiu\InitPostShowChannelCommand::class,
       \App\Console\Commands\Pixiu\ApplyCountCommand::class,
       \App\Console\Commands\Pixiu\PostStopShowCommand::class,
       \App\Console\Commands\Pixiu\WriteThresholdByProductCommand::class,
       \App\Console\Commands\Pixiu\WriteThresholdByPostCommand::class,
       \App\Console\Commands\Pixiu\InitZhipinPostShowChannelCommand::class,
       \App\Console\Commands\Wuba\WubaPushAccountCheckCommand::class,
       \App\Console\Commands\Wuba\WubaUpdateAllPostTitleCommand::class,
       \App\Console\Commands\Wuba\WubaPushUpdatePostCommand::class,
       \App\Console\Commands\Wuba\WubaPushAllPostCommand::class,
       \App\Console\Commands\PostPubInsertLimitInfoCommand::class,
       \App\Console\Commands\PostPubReplaceTextCommand::class,
       \App\Console\Commands\TaskPaySalaryWatchCommand::class,
       \App\Console\Commands\SyncUserLoginPlatformLogoCommand::class,
       \App\Console\Commands\ApplyUndealPushMsgCommand::class,
       \App\Console\Commands\PushMessageToBClientCommand::class,
       \App\Console\Commands\CheckAdvPostDescriptionCommand::class,
       \App\Console\Commands\CompanyAddCommand::class,
       \App\Console\Commands\AdvCheckCommand::class,
       \App\Console\Commands\ClearPostCommand::class,
       \App\Console\Commands\TestCommand::class,
       \App\Console\Commands\Inspire::class,
       \App\Console\Commands\PushCommand::class,
       \App\Console\Commands\DoumiNotifyPushCommand::class,
       \App\Console\Commands\DownCashRecordCommand::class,
       \App\Console\Commands\PostApplyOfflineCommand::class,
       \App\Console\Commands\CashApplyProcessCommand::class,
       \App\Console\Commands\MakeWeixinMenuCommand::class,
       \App\Console\Commands\SettlePaymentFinishCommand::class,
       \App\Console\Commands\RsyncCanApplyCommand::class,
       \App\Console\Commands\ShoudanCashCommand::class,
       \App\Console\Commands\EmployStatusPushCommand::class,
       \App\Console\Commands\ApplyInfoNoticeCommand::class,
       \App\Console\Commands\PayFinishPushCommand::class,
       \App\Console\Commands\BizPaySalaryCommand::class,
       \App\Console\Commands\Crononce\ApplyListingUpdateCommand::class,
       \App\Console\Commands\DbColumnSyncCommand::class,
       \App\Console\Commands\Crononce\PostCommissionUpdateCommand::class,
       \App\Console\Commands\UpdateWeixinMenu::class,
       \App\Console\Commands\Crononce\UserLimitServiceCommand::class,
       \App\Console\Commands\GenerateSiteMap::class,
       \App\Console\Commands\GenerateBaiduXml::class,
       \App\Console\Commands\Sitemap::class,
       \App\Console\Commands\Crononce\UserLimitServiceCommand::class,
       \App\Console\Commands\SyncMemberStateCommand::class,
       \App\Console\Commands\DoumiMobileListToRedis::class,
       \App\Console\Commands\DoumiMobileListToRedis_All::class,
       \App\Console\Commands\RewardFlag1Command::class,
       \App\Console\Commands\RsyncPostRewardCommand::class,
       \App\Console\Commands\PauseJobApplyLimitCommand::class,
       \App\Console\Commands\PauseJobTimeOutCommand::class,
       \App\Console\Commands\ZhangyupaRanklistCommand::class,
       \App\Console\Commands\ZhangyupaImgThumbCommand::class,
       \App\Console\Commands\Crononce\WeixinOpenidInitCommand::class,
       \App\Console\Commands\StatJobExprienceCommand::class,
       \App\Console\Commands\StatJobExprienceIncrementCommand::class,
       \App\Console\Commands\ApplyDataCompatibleCommand::class,
       \App\Console\Commands\PostCloneCommand::class,
       \App\Console\Commands\PutTaskOfflineCommand::class,
       \App\Console\Commands\RefundAfterTaskEndCommand::class,
       \App\Console\Commands\OverTimeApplyTaskPushCommand::class,
       \App\Console\Commands\TaskOffLinePushCommand::class,
       \App\Console\Commands\TaskApplyTimeOutCommand::class,
       \App\Console\Commands\TaskApplyFinishTimeOutCommand::class,
       \App\Console\Commands\TaskApplyAuditTimeOutCommand::class,
       \App\Console\Commands\StockMoniterCommand::class,
       \App\Console\Commands\TaskFreezeCheckCommand::class,
       \App\Console\Commands\TaskFreezeAmountCheckCommand::class,
       \App\Console\Commands\RecoveryAllawanceCommand::class,
       \App\Console\Commands\SyncBizSalayOrderStatusCommand::class,
       \App\Console\Commands\TaskListSortWithListenStock::class,
       \App\Console\Commands\TaskUpdateWeightCommand::class,
       \App\Console\Commands\PostRefreshAtHandleCommand::class,
       \App\Console\Commands\TaskStepImageUpDataCommand::class,
       \App\Console\Commands\TaskCommitContentUpDataCommand::class,
       \App\Console\Commands\TaskStockShortagePushCommand::class,
       \App\Console\Commands\Shujiagong::class,
       \App\Console\Commands\TaskListSortNg::class,
       \App\Console\Commands\AppStatsCommand::class,
       \App\Console\Commands\TaskServiceFeeAdjustCommand::class,
       \App\Console\Commands\ImGroupInitToRedisCommand::class,
       \App\Console\Commands\ImFedbackTimeOutCommand::class,
       \App\Console\Commands\ImPollSendSmsCommand::class,
       \App\Console\Commands\ApplyDataHandleCommand::class,
       \App\Console\Commands\TaskStockShortagePushCommand::class,
       \App\Console\Commands\ImPollSendSmsTempCommand::class,
       \App\Console\Commands\TaskEndWithNoFreezeCommand::class,
       \App\Console\Commands\PostSalaryTypeCommand::class,
       \App\Console\Commands\FangGeZiCountCommand::class,
       \App\Console\Commands\ImTimeoutFixCommand::class,
       \App\Console\Commands\UpdateOperatePostStatusLogCommand::class,
       \App\Console\Commands\CompanyAuditedCommand::class,
       //\App\Console\Commands\FangGeZiCountCommand::class,
       \App\Console\Commands\ApplyDataHandleCommand::class,
       \App\Console\Commands\PopImInfoFromQueueCommand::class,
       \App\Console\Commands\DeleteReApplyCommand::class,
       //\App\Console\Commands\ThumbUpFixCommand::class,
       \App\Console\Commands\ThumbUpFromUserIdFixCommand::class,
       \App\Console\Commands\CompanySitemap::class,
       \App\Console\Commands\PostWeightCalCommand::class,
       //\App\Console\Commands\PostHistoryVersionCommand::class,
       \App\Console\Commands\PostWeightCleanCommand::class,
       \App\Console\Commands\ApplyEsCheckCommand::class,
       \App\Console\Commands\ProducePostCommand::class,
       \App\Console\Commands\SettlementRetryCommand::class,
       \App\Console\Commands\AlipayApplyEmployerManagePushCommand::class,
       \App\Console\Commands\AlipayApplyEmployerManagePopCommand::class,
       \App\Console\Commands\AlipayGetPostCommand::class,
       \App\Console\Commands\AlipayPostRetryCommand::class,
       \App\Console\Commands\AlipayEmployerRetryCommand::class,
       \App\Console\Commands\PushPaySalaryMsgCommand::class,
       \App\Console\Commands\SettlementBalanceCommand::class,
       \App\Console\Commands\AlipayPushAllPostCommand::class,
       \App\Console\Commands\AlipayRefreshCommand::class,
       \App\Console\Commands\AlipayRefreshByPostCommand::class,
       \App\Console\Commands\AlipaySetRefreshCommand::class,
       \App\Console\Commands\AlipayRefreshByPostScriptCommand::class,
       \App\Console\Commands\AlipayCampusJobPushCommand::class,
       \App\Console\Commands\AlipayCampusJobApplyPopCommand::class,
       \App\Console\Commands\AutoPostGeneration::class,
       \App\Console\Commands\DepositPostOfflineCommand::class,
       \App\Console\Commands\InitUserProfileCommand::class,
       \App\Console\Commands\DepositRefundCommand::class,
       \App\Console\Commands\DepositChangeSmsMessageCommand::class,
       \App\Console\Commands\PostHistoryVersionQueueCommand::class,
       \App\Console\Commands\DepositRefundCommand::class,
       \App\Console\Commands\DepositOperateRecordCommand::class,
       \App\Console\Commands\PreRefundAfterTaskOfflineCommand::class,
       \App\Console\Commands\TaskExpireRefundCommand::class,
       \App\Console\Commands\TaskBonusStaCommand::class,
       \App\Console\Commands\TaskBonusPayCommand::class,
       \App\Console\Commands\PushTaskBonusMsgCommand::class,
       \App\Console\Commands\TaskBonusBalanceCommand::class,
       \App\Console\Commands\TaskBonusQueueCommand::class,
       \App\Console\Commands\TaskTransferToUserCommand::class,
       \App\Console\Commands\UcenterProfileSyncCommand::class,
       \App\Console\Commands\PostReplaceSpecialCharCommand::class,
       \App\Console\Commands\PlatinumOfflineCommand::class,
       \App\Console\Commands\PostOfflineCommand::class,
       \App\Console\Commands\AdvChangeRecordCommand::class,
       \App\Console\Commands\PlatinumWillOfflinePushCommand::class,
       \App\Console\Commands\PutPostOnAdvCommand::class,
       \App\Console\Commands\DepositAuditRefuseRefundCommand::class,
       \App\Console\Commands\ApplyFillBuserInfoCommand::class,
       \App\Console\Commands\StatDepositDemandCommand::class,
       \App\Console\Commands\TaskReApplyAuditTimeOutCommand::class,
       \App\Console\Commands\TaskBdRepairCommand::class,
       \App\Console\Commands\TaskOpenApiAuditQueueCommand::class,
       \App\Console\Commands\TaskOpenApiAuditNoticeCommand::class,
       \App\Console\Commands\TaskCoopMappingSetStatusEndCommand::class,
       \App\Console\Commands\PlatinumOfflinePostCommand::class,
       \App\Console\Commands\CacheCompanyIsAuditedCommand::class,
       \App\Console\Commands\Monitor\BusinessStatistics\StatisticsQueueCommand::class,
       \App\Console\Commands\Monitor\BusinessStatistics\PostTypeMonitorCommand::class,
       \App\Console\Commands\Monitor\BusinessStatistics\PostSourceMonitorCommand::class,
       \App\Console\Commands\Monitor\BusinessStatistics\PaymentMonitorCommand::class,
       \App\Console\Commands\Monitor\BusinessStatistics\ApplySourceMonitorCommand::class,
       \App\Console\Commands\Monitor\BusinessStatistics\ApplyTypeMonitorCommand::class,
       \App\Console\Commands\Monitor\BusinessStatistics\TaskBonusMonitorCommand::class,
       \App\Console\Commands\Monitor\BusinessStatistics\TaskMonitorCommand::class,
       \App\Console\Commands\Monitor\BusinessAccounting\PostMonitorCommand::class,
       \App\Console\Commands\OpenApiAuditFindingCommand::class,
       \App\Console\Commands\ClientLogUploadCommand::class,
       \App\Console\Commands\ClientLogUploadCommand::class,
       \App\Console\Commands\OpenApiAuditFindingCommand::class,
       \App\Console\Commands\ReadPhoneCommand::class,
       \App\Console\Commands\ApplyExpireStatusChangeCommand::class,
       \App\Console\Commands\ApplicationsSmsNoticeCommand::class,
       \App\Console\Commands\AddApplyToCacheCommand::class,
       \App\Console\Commands\ApplyOutTimeCommand::class,
       \App\Console\Commands\AddCoordinateCommand::class,
       \App\Console\Commands\PostRefreshCommand::class,
       \App\Console\Commands\PostReplaceTripleBreakCommand::class,
       \App\Console\Commands\CpaGetExpenditureChargeCommand::class,
       \App\Console\Commands\CpaSettlementCommand::class,
       \App\Console\Commands\CpaOfflineToSettlementCommand::class,
       \App\Console\Commands\ApplyOutTime2ImPushQueueCommand::class,
       \App\Console\Commands\ImPushQueueStatNoticeCommand::class,
       \App\Console\Commands\Monitor\ServiceLog\ServiceLogStatisticsCommand::class,
       \App\Console\Commands\Monitor\ServiceLog\ServiceLogMonitorCommand::class,
       \App\Console\Commands\CpaExpenditureCommand::class,
       \App\Console\Commands\RpoRefreshPostCommand::class,
       // \App\Console\Commands\WuBaPushPostByFeitianCommand::class,
       \App\Console\Commands\WuBaPushPostRetryCommand::class,
       \App\Console\Commands\WuBaUpdateTokenCommand::class,
       \App\Console\Commands\WuBaDeletePostCommand::class,
       \App\Console\Commands\WuBaUpdatePostCommand::class,
       //\App\Console\Commands\TianYanChaPushPostCommand::class,
       \App\Console\Commands\WuBaRefreshPostCommand::class,
       \App\Console\Commands\PerfectCampusPushPostCommand::class,
       \App\Console\Commands\PerfectCampusApplyPopCommand::class,
       \App\Console\Commands\CorpCertificateExpireCommand::class,
       \App\Console\Commands\CorpCertificateExpiredCommand::class,
       \App\Console\Commands\DoumiRMPushCommand::class,
       \App\Console\Commands\ImportThumpToSaasCommand::class,
       \App\Console\Commands\StatCommentTagsCountCommand::class,
       \App\Console\Commands\StatCommentStarsCommand::class,
       \App\Console\Commands\PackageExpiredCommand::class,
       \App\Console\Commands\UpdateJzPostIsWagesGuaranteeCommand::class,
       \App\Console\Commands\DiamondReferencePriceCommand::class,
       \App\Console\Commands\DiamondAuctionQueueCommand::class,
       \App\Console\Commands\DiamondCheckUniformCommand::class,
       \App\Console\Commands\DiamondAuctionResultCommand::class,
       \App\Console\Commands\DiamondCheckResultCommand::class,
       \App\Console\Commands\DiamondNextAuctionsCommand::class,
       \App\Console\Commands\DiamondCheckNextCommand::class,
       \App\Console\Commands\DiamondAuctionPayCommand::class,
       \App\Console\Commands\DiamondAuctionMonitorCommand::class,
       \App\Console\Commands\DiamondAuctionTypeCommand::class,
       \App\Console\Commands\DiamondNewAuctionTypeCommand::class,
       \App\Console\Commands\ConsumeBusinessFinanceCommand::class,
       \App\Console\Commands\DiamondCPTOnlineCommand::class,
       \App\Console\Commands\DiamondCPTUpdateCommand::class,
       \App\Console\Commands\UpdateJzPostIsWagesGuaranteeCommand::class,
       \App\Console\Commands\DiamondAuctionCycleOnlineCheckCommand::class,
       \App\Console\Commands\DiamondToPointGoldHandleCommand::class,
       \App\Console\Commands\DiamondOnlineAddTagCommand::class,
       \App\Console\Commands\DiamondOnlineAddTagCheckCommand::class,
       \App\Console\Commands\ApplyTableCDCHandleCommand::class,
       \App\Console\Commands\PackageOrderCreateCommand::class,
       \App\Console\Commands\CopyPostCommand::class,
       \App\Console\Commands\DiamondAuctionTypeUpdateCommand::class,
       \App\Console\Commands\QualityPositionReportCommand::class,
       \App\Console\Commands\PostBatchRefreshCommand::class,
       \App\Console\Commands\TbkGoodsOrderGetCommand::class,
       \App\Console\Commands\TbkGoodsOrderUpdateCommand::class,
       \App\Console\Commands\QualityPositionReportCommand::class,
       \App\Console\Commands\PostPushServiceCommand::class,
       \App\Console\Commands\DiamondAutoOpenCommand::class,
       \App\Console\Commands\OfflinePostByCrmCommand::class,
       \App\Console\Commands\ApplyBlackDenialCommand::class,
       \App\Console\Commands\DiamondAuctionResultNoticeCommand::class,
       \App\Console\Commands\DiamondBalanceLackingNoticeCommand::class,
       \App\Console\Commands\Crononce\FixPostTypeAppAddrCommand::class,
       \App\Console\Commands\Crononce\PostRefuseCommand::class,
       //\App\Console\Commands\TBKCheckAccountCommand::class,
       //\App\Console\Commands\TBKPaySalaryCommand::class,
       \App\Console\Commands\Monitor\BusinessAccounting\DiamondMonitorCommand::class,
       \App\Console\Commands\Monitor\BusinessAccounting\TbkMonitorCommand::class,
       \App\Console\Commands\Monitor\BusinessAccounting\CouponMonitorCommand::class,
       \App\Console\Commands\PostFilterRpo::class,
       // \App\Console\Commands\PostFilterRpoCount::class,
       \App\Console\Commands\WangcaibaoRefreshExpireCommand::class,
       \App\Console\Commands\BizInviteAwardHandleCommand::class,
       \App\Console\Commands\WcbPostOfflineCommand::class,
       \App\Console\Commands\DiamondApplyThreshlodCommand::class,
       \App\Console\Commands\PostMarkUpTag2CrmCommand::class,
       \App\Console\Commands\ApplyAutoPassCommand::class,
       \App\Console\Commands\ApplyAutoRefuseCommand::class,
       \App\Console\Commands\Wuba\WubaDelPostCommand::class,
       \App\Console\Commands\PostCopyMarkUpTag2CrmCommand::class,
       \App\Console\Commands\AddPostHistoryVersionCommand::class,

       \App\Console\Commands\PayoffCommand::class,
       \App\Console\Commands\BizRankAwardCommand::class,
       \App\Console\Commands\BatchInviteApplyStatisticCommand::class,
       \App\Console\Commands\BizInviteOcrDataHandleCommand::class,
       \App\Console\Commands\BatchInviteApplyStatisticCommand::class,
       \App\Console\Commands\BizInviteOcrDataHandleCommand::class,
       \App\Console\Commands\BatchInviteApplyStatisticCommand::class,
       \App\Console\Commands\DiamondYunYingWeiThreshlodCommand::class,
       \App\Console\Commands\OperationPositionApplyCDCHandleCommand::class,
       \App\Console\Commands\AdvPostRelationOfflineCommand::class,
       \App\Console\Commands\PostPushStatus\GoldPostPushStatusCommand::class,
       \App\Console\Commands\PostPushStatus\WangcaibaoPostPushStatusCommand::class,
       \App\Console\Commands\PostPushStatus\PostCDCPushStatusCommand::class,
       \App\Console\Commands\PostPushStatus\CWubaQueueCommand::class,

       \App\Console\Commands\OrgPackage\CheckOrgPackageCommand::class,
       \App\Console\Commands\OrgPackage\CheckOrgPackageValueCommand::class,
       \App\Console\Commands\OrgPackage\OrgChangeQueueCommand::class,
       \App\Console\Commands\OrgPackage\PackageChangeQueueCommand::class,
        \App\Console\Commands\OrgPackage\RetractCpaOrgPackageCommand::class,
        \App\Console\Commands\OrgPackage\RetractCheckPausePostCommand::class,

       \App\Console\Commands\BizPostStatistical\InitializationStatisticalCommand::class,
       \App\Console\Commands\BizPostStatistical\BizPostCDCStatisticalCommand::class,
       \App\Console\Commands\BizPostStatistical\BizPostCityCDCStatisticalCommand::class,
       \App\Console\Commands\BizPostStatistical\BizPostCheckStatisticalCommand::class,


       \App\Console\Commands\ExtensionWorkerCompanyUpdateCommand::class,
       \App\Console\Commands\ExtensionWorkerPostStatCommand::class,
       \App\Console\Commands\Stat\StatRefreshedUserCommand::class,
       \App\Console\Commands\ApplyHistoryStatusMonitorCommand::class,
       \App\Console\Commands\RecProfileApplyMonitorCommand::class,
       \App\Console\Commands\PostAddCanChatTagCommand::class,
       \App\Console\Commands\PostAddYunYingWeiTagCommand::class,
       \App\Console\Commands\ExtensionWorkerCompanyAuditStatusUpdateCommand::class,
       //运营策略通知
       \App\Console\Commands\CreateOperationSystemStorageNoticeCommand::class,
       \App\Console\Commands\ProcessOperationSystemStorageNoticeCommand::class,
       \App\Console\Commands\PushCreditRatingCompanyToCrmCommand::class,

       \App\Console\Commands\PostNumIncListeningPostCommand::class,
       \App\Console\Commands\AddWatermarkToStoreHeadDoorImgCommand::class,
       \App\Console\Commands\AddWatermarkImgToPostWorkImgsCommand::class,


       //只执行一次脚本
       \App\Console\Commands\Crononce\PreferredDataCleanCommand::class,
       \App\Console\Commands\Crononce\PreferredPostCleanCommand::class,
       \App\Console\Commands\Crononce\PreferredAdvsCleanCommand::class,
       \App\Console\Commands\DiamondAuctionStatisticsCommand::class,
       \App\Console\Commands\WorkTimeCleanCommand::class,
       \App\Console\Commands\DiamondAuctionHistoryStatisticsCommand::class,
       \App\Console\Commands\PostAutoRefuseCommand::class,
       \App\Console\Commands\FullPostTypeUpdateCommand::class,
       \App\Console\Commands\AddOutMainNoCommand::class,
       \App\Console\Commands\updatePostTagCommand::class,
       \App\Console\Commands\Attr1ToShowCityIdsCommand::class,
       \App\Console\Commands\HistoryComplainDisposeCommand::class,
       \App\Console\Commands\ApplyDisposeRateCommand::class,
       \App\Console\Commands\PostAddMingqiTagCommand::class,
       \App\Console\Commands\DownloadApplyCommand::class,
       \App\Console\Commands\PackageCheckDataCommond::class,
       \App\Console\Commands\SyncRtmQZInit::class,
       //\App\Console\Commands\PostCopyFromExcelCommand::class,
       \App\Console\Commands\AddRelatedIdToPostConsumeCommand::class,
       \App\Console\Commands\AlipayCampusJobChannelPushCommand::class,
       \App\Console\Commands\Crononce\RetreatmentExtCerti2AuditQueueCommand::class,
       \App\Console\Commands\Wuba\WubaGetReasonForPostCommand::class,
       \App\Console\Commands\Wuba\WubaPushFilterPostCommand::class,
       \App\Console\Commands\Tool\RefuseStoreCertBatchCommand::class,
       \App\Console\Commands\DiamondPostCouponSendCommand::class,
       \App\Console\Commands\TaskCrowdPaySalaryCommand::class,
       \App\Console\Commands\FreezeUserHandleCommand::class,
       \App\Console\Commands\PostHistoryVersionConsultingFixCommand::class,
       \App\Console\Commands\SyncIncTagCommand::class,
       \App\Console\Commands\TaskApplyAuditContentOutputCommand::class,
       \App\Console\Commands\CrowdApplyChangeContactWayCommand::class,
       \App\Console\Commands\PostLabelOptCommand::class,
       \App\Console\Commands\RefreshUserPostCommand::class,

       \App\Console\Commands\PhoneInviteXCodeExpireCommand::class,
       \App\Console\Commands\PhoneInviteDetailHandleCommand::class,
       \App\Console\Commands\PhoneInviteMonitorCommand::class,
       \App\Console\Commands\PhoneInviteXCodeInitCommand::class,
       \App\Console\Commands\PhoneInviteXCodeAddCommand::class,
       \App\Console\Commands\PhoneInviteCallStatisticCommand::class,
       \App\Console\Commands\PhoneInviteConfirmCallCommand::class,
       \App\Console\Commands\PhoneInviteOutShowNumberMonitorCommand::class,
       \App\Console\Commands\PhoneInviteConcurrencyCacheInitCommand::class,
       \App\Console\Commands\PhoneInviteXCodeMobileInitCommand::class,
       \App\Console\Commands\PhoneInviteXCodeMobileExpireCommand::class,
       \App\Console\Commands\MobileInviteMonitorCommand::class,
       \App\Console\Commands\MobileInviteCallStatisticCommand::class,

       \App\Console\Commands\KachazhuanCrmCallBackHandleCommand::class,
       \App\Console\Commands\DianzhangPostCommand::class,
       \App\Console\Commands\KachazhuanCommand::class,
       \App\Console\Commands\PostFastPubCommand::class,
       \App\Console\Commands\SetBUserInfoCacheCommand::class,
       \App\Console\Commands\KachazhuanPostInfoAuditCommand::class,
       \App\Console\Commands\RepeatPushCerti2QueueCommand::class,

       \App\Console\Commands\PointGoldGrantCouponCommand::class,

       \App\Console\Commands\UpdateMingQiPostDeadlineCommand::class,

       \App\Console\Commands\KachaPostCommand::class,

       \App\Console\Commands\PointGoldDetailPriceCommand::class,
       \App\Console\Commands\RecProfileMonitorCommand::class,
       \App\Console\Commands\PushOperationMessageToBClientCommand::class,

       \App\Console\Commands\ExtensionBatchSignCompanyRegSourceCommand::class,
       \App\Console\Commands\ExtensionBatchFixCompanyProvinceCommand::class,


       \App\Console\Commands\ImDayReplyPushCommand::class,
       \App\Console\Commands\ImWeekReplyPushCommand::class,
       \App\Console\Commands\ImUvReplyPushCommand::class,
       \App\Console\Commands\ImUvPushUserSetCommand::class,
       \App\Console\Commands\ImDayPushUserSetCommand::class,
       \App\Console\Commands\ImWeekPushUserSetCommand::class,

       \App\Console\Commands\YearlyCompensateCommand::class,
       \App\Console\Commands\CompanyEditCanChatTagCommand::class,
       \App\Console\Commands\BizAddTagCommand::class,

       \App\Console\Commands\PushCrmImContentCommand::class,
       \App\Console\Commands\PushImActiveBizToCrmCommand::class,
       \App\Console\Commands\AuditCrmImContentCommand::class,

       \App\Console\Commands\ImRemindPushCommand::class,
       \App\Console\Commands\BatchUpdatePersonnelDemandCommand::class,
       \App\Console\Commands\BatchAddMcStoreNameCommand::class,


       \App\Console\Commands\PostOfflineAlarmCommand::class,
       \App\Console\Commands\SamehandleDataCommand::class,

       \App\Console\Commands\FixSalaryRankingCommand::class,
       \App\Console\Commands\CalCompanyNameCommand::class,
       \App\Console\Commands\PostOfflineAlarmCommand::class,
       \App\Console\Commands\CalCompanyNameCommand::class,
       \App\Console\Commands\AddTagFromJobTypeCommand::class,
       \App\Console\Commands\PushExchangeContactOverTimeMsgCommand::class,

       \App\Console\Commands\Boss\BatchInsertBossPostCommand::class,
       \App\Console\Commands\Boss\StatBossCompanyCommand::class,
       \App\Console\Commands\Boss\StatBossPostCommand::class,
       \App\Console\Commands\Boss\StatBossDoumiContrastDataCommand::class,
       \App\Console\Commands\AddKaChaZhuanSmsCommand::class,
       \App\Console\Commands\ConsumeJumpSmsCommand::class,
       \App\Console\Commands\SendNewYearSmsCommand::class,
       \App\Console\Commands\SpiderBizEnableCommand::class,
       \App\Console\Commands\CompanyBusinessPostOfflineCommand::class,

       \App\Console\Commands\PostNumLimitInitCompanyCommand::class,
       \App\Console\Commands\PostNumLimitInitCompanyByRecentPostCommand::class,
       \App\Console\Commands\FixDianzhangPostJobTypeCommand::class,

       \App\Console\Commands\SyncBizName2RongYunCommand::class,
       \App\Console\Commands\BatchPostOfflineNewestCommand::class,

       \App\Console\Commands\BatchOffLinePostsCommand::class,
       \App\Console\Commands\ReOnlinePostsCommand::class,

       \App\Console\Commands\MobileInviteGroupBindCommand::class,
       \App\Console\Commands\PhoneMonitorMobileCommand::class,
       \App\Console\Commands\PhoneCallStatisticCommand::class,


        \App\Console\Commands\Pixiu\PixiuOfflineCountCommand::class,
        \App\Console\Commands\UpdateJobDateTypeCommand::class,
        \App\Console\Commands\Pixiu\LoadStrategyCommand::class,
        \App\Console\Commands\Pixiu\InitPostShowChannelCommand::class,
        \App\Console\Commands\Pixiu\ApplyCountCommand::class,
        \App\Console\Commands\Pixiu\PostStopShowCommand::class,
        \App\Console\Commands\Pixiu\WriteThresholdByProductCommand::class,
        \App\Console\Commands\Pixiu\WriteThresholdByPostCommand::class,
        \App\Console\Commands\Pixiu\InitZhipinPostShowChannelCommand::class,
        \App\Console\Commands\Wuba\WubaPushAccountCheckCommand::class,
        \App\Console\Commands\Wuba\WubaUpdateAllPostTitleCommand::class,
        \App\Console\Commands\Wuba\WubaPushUpdatePostCommand::class,
        \App\Console\Commands\Wuba\WubaPushAllPostCommand::class,
        \App\Console\Commands\PostPubReplaceTextCommand::class,
        \App\Console\Commands\PostPubInsertLimitInfoCommand::class,
        \App\Console\Commands\TaskPaySalaryWatchCommand::class,
        \App\Console\Commands\SyncUserLoginPlatformLogoCommand::class,
        \App\Console\Commands\ApplyUndealPushMsgCommand::class,
        \App\Console\Commands\PushMessageToBClientCommand::class,
        \App\Console\Commands\CheckAdvPostDescriptionCommand::class,
        \App\Console\Commands\AdvCheckCommand::class,
        \App\Console\Commands\ClearPostCommand::class,
        \App\Console\Commands\TestCommand::class,
        \App\Console\Commands\Inspire::class,
        \App\Console\Commands\PushCommand::class,
        \App\Console\Commands\DoumiNotifyPushCommand::class,
        \App\Console\Commands\DownCashRecordCommand::class,
        \App\Console\Commands\PostApplyOfflineCommand::class,
        \App\Console\Commands\CashApplyProcessCommand::class,
        \App\Console\Commands\MakeWeixinMenuCommand::class,
        \App\Console\Commands\SettlePaymentFinishCommand::class,
        \App\Console\Commands\RsyncCanApplyCommand::class,
        \App\Console\Commands\ShoudanCashCommand::class,
        \App\Console\Commands\EmployStatusPushCommand::class,
        \App\Console\Commands\ApplyInfoNoticeCommand::class,
        \App\Console\Commands\PayFinishPushCommand::class,
        \App\Console\Commands\BizPaySalaryCommand::class,
        \App\Console\Commands\Crononce\ApplyListingUpdateCommand::class,
        \App\Console\Commands\DbColumnSyncCommand::class,
        \App\Console\Commands\Crononce\PostCommissionUpdateCommand::class,
        \App\Console\Commands\UpdateWeixinMenu::class,
        \App\Console\Commands\Crononce\UserLimitServiceCommand::class,
        \App\Console\Commands\Crononce\ApplyUniqueDataCommand::class,
        \App\Console\Commands\Crononce\ApplyUniqueClearCommand::class,
        \App\Console\Commands\GenerateSiteMap::class,
        \App\Console\Commands\GenerateBaiduXml::class,
        \App\Console\Commands\Sitemap::class,
        \App\Console\Commands\Crononce\UserLimitServiceCommand::class,
        \App\Console\Commands\SyncMemberStateCommand::class,
        \App\Console\Commands\DoumiMobileListToRedis::class,
        \App\Console\Commands\DoumiMobileListToRedis_All::class,
        \App\Console\Commands\RewardFlag1Command::class,
        \App\Console\Commands\RsyncPostRewardCommand::class,
        \App\Console\Commands\PauseJobApplyLimitCommand::class,
        \App\Console\Commands\PauseJobTimeOutCommand::class,
        \App\Console\Commands\ZhangyupaRanklistCommand::class,
        \App\Console\Commands\ZhangyupaImgThumbCommand::class,
        \App\Console\Commands\Crononce\WeixinOpenidInitCommand::class,
        \App\Console\Commands\ApplyDataCompatibleCommand::class,
        \App\Console\Commands\StatJobExprienceCommand::class,
        \App\Console\Commands\StatJobExprienceIncrementCommand::class,
        \App\Console\Commands\PostCloneCommand::class,
        \App\Console\Commands\PutTaskOfflineCommand::class,
        \App\Console\Commands\RefundAfterTaskEndCommand::class,
        \App\Console\Commands\OverTimeApplyTaskPushCommand::class,
        \App\Console\Commands\TaskOffLinePushCommand::class,
        \App\Console\Commands\TaskApplyTimeOutCommand::class,
        \App\Console\Commands\TaskApplyFinishTimeOutCommand::class,
        \App\Console\Commands\TaskApplyAuditTimeOutCommand::class,
        \App\Console\Commands\StockMoniterCommand::class,
        \App\Console\Commands\SyncBizSalayOrderStatusCommand::class,
        \App\Console\Commands\TaskListSortWithListenStock::class,
        \App\Console\Commands\TaskUpdateWeightCommand::class,
        \App\Console\Commands\PostRefreshAtHandleCommand::class,
        \App\Console\Commands\TaskStepImageUpDataCommand::class,
        \App\Console\Commands\TaskCommitContentUpDataCommand::class,
        \App\Console\Commands\TaskStockShortagePushCommand::class,
        \App\Console\Commands\Shujiagong::class,
        \App\Console\Commands\TaskListSortNg::class,
        \App\Console\Commands\AppStatsCommand::class,
        \App\Console\Commands\TaskServiceFeeAdjustCommand::class,
        \App\Console\Commands\ImGroupInitToRedisCommand::class,
        \App\Console\Commands\TaskStockShortagePushCommand::class,
        \App\Console\Commands\ImFedbackTimeOutCommand::class,
        \App\Console\Commands\ImPollSendSmsCommand::class,
        \App\Console\Commands\ImPollSendSmsTempCommand::class,
        \App\Console\Commands\TaskEndWithNoFreezeCommand::class,
        \App\Console\Commands\PostSalaryTypeCommand::class,
        \App\Console\Commands\ImTimeoutFixCommand::class,
        \App\Console\Commands\UpdateOperatePostStatusLogCommand::class,
        \App\Console\Commands\CompanyAuditedCommand::class,
        //\App\Console\Commands\FangGeZiCountCommand::class,
        \App\Console\Commands\ApplyDataHandleCommand::class,
        \App\Console\Commands\PopImInfoFromQueueCommand::class,
        //\App\Console\Commands\ThumbUpFixCommand::class,
        \App\Console\Commands\ThumbUpFromUserIdFixCommand::class,
        \App\Console\Commands\CompanySitemap::class,
        \App\Console\Commands\PostWeightCalCommand::class,
        \App\Console\Commands\PostWeightCleanCommand::class,
        \App\Console\Commands\ApplyEsCheckCommand::class,
        \App\Console\Commands\ProducePostCommand::class,
        \App\Console\Commands\SettlementRetryCommand::class,
        \App\Console\Commands\PushPaySalaryMsgCommand::class,
        \App\Console\Commands\SettlementBalanceCommand::class,
        \App\Console\Commands\AlipayApplyEmployerManagePushCommand::class,
        \App\Console\Commands\AlipayApplyEmployerManagePopCommand::class,
        \App\Console\Commands\AlipayGetPostCommand::class,
        \App\Console\Commands\AlipayPostRetryCommand::class,
        \App\Console\Commands\AlipayEmployerRetryCommand::class,
        \App\Console\Commands\AlipayPushAllPostCommand::class,
        \App\Console\Commands\AlipayRefreshCommand::class,
        \App\Console\Commands\AlipayRefreshByPostCommand::class,
        \App\Console\Commands\AlipaySetRefreshCommand::class,
        \App\Console\Commands\AlipayRefreshByPostScriptCommand::class,
        \App\Console\Commands\AlipayCampusJobPushCommand::class,
        \App\Console\Commands\AlipayCampusJobApplyPopCommand::class,
        \App\Console\Commands\AutoPostGeneration::class,
        \App\Console\Commands\DepositPostOfflineCommand::class,
        \App\Console\Commands\InitUserProfileCommand::class,
        \App\Console\Commands\DepositRefundCommand::class,
        \App\Console\Commands\DepositChangeSmsMessageCommand::class,
        \App\Console\Commands\PostHistoryVersionQueueCommand::class,
        \App\Console\Commands\DepositRefundCommand::class,
        \App\Console\Commands\DepositOperateRecordCommand::class,
        \App\Console\Commands\PreRefundAfterTaskOfflineCommand::class,
        \App\Console\Commands\TaskExpireRefundCommand::class,
        \App\Console\Commands\TaskBonusStaCommand::class,
        \App\Console\Commands\TaskBonusPayCommand::class,
        \App\Console\Commands\PushTaskBonusMsgCommand::class,
        \App\Console\Commands\TaskBonusBalanceCommand::class,
        \App\Console\Commands\TaskBonusQueueCommand::class,
        \App\Console\Commands\PostReplaceSpecialCharCommand::class,
        \App\Console\Commands\PlatinumOfflineCommand::class,
        \App\Console\Commands\PostOfflineCommand::class,
        \App\Console\Commands\AdvChangeRecordCommand::class,
        \App\Console\Commands\PlatinumWillOfflinePushCommand::class,
        \App\Console\Commands\PutPostOnAdvCommand::class,
        \App\Console\Commands\DepositAuditRefuseRefundCommand::class,
        \App\Console\Commands\ApplyFillBuserInfoCommand::class,
        \App\Console\Commands\TaskReApplyAuditTimeOutCommand::class,
        \App\Console\Commands\TaskOpenApiAuditQueueCommand::class,
        \App\Console\Commands\TaskOpenApiAuditNoticeCommand::class,
        \App\Console\Commands\TaskCoopMappingSetStatusEndCommand::class,
        \App\Console\Commands\PlatinumOfflinePostCommand::class,
        \App\Console\Commands\CacheCompanyIsAuditedCommand::class,
        \App\Console\Commands\Monitor\BusinessStatistics\StatisticsQueueCommand::class,
        \App\Console\Commands\Monitor\BusinessStatistics\PostTypeMonitorCommand::class,
        \App\Console\Commands\Monitor\BusinessStatistics\PostSourceMonitorCommand::class,
        \App\Console\Commands\Monitor\BusinessStatistics\PaymentMonitorCommand::class,
        \App\Console\Commands\Monitor\BusinessStatistics\ApplySourceMonitorCommand::class,
        \App\Console\Commands\Monitor\BusinessStatistics\ApplyTypeMonitorCommand::class,
        \App\Console\Commands\Monitor\BusinessStatistics\TaskBonusMonitorCommand::class,
        \App\Console\Commands\Monitor\BusinessStatistics\TaskMonitorCommand::class,
        \App\Console\Commands\Monitor\BusinessAccounting\PostMonitorCommand::class,
        \App\Console\Commands\ClientLogUploadCommand::class,
        \App\Console\Commands\OpenApiAuditFindingCommand::class,
        \App\Console\Commands\ReadPhoneCommand::class,
        \App\Console\Commands\ApplyExpireStatusChangeCommand::class,
        \App\Console\Commands\ApplicationsSmsNoticeCommand::class,
        \App\Console\Commands\AddApplyToCacheCommand::class,
        \App\Console\Commands\ApplyOutTimeCommand::class,
        \App\Console\Commands\AddCoordinateCommand::class,
        \App\Console\Commands\PostRefreshCommand::class,
        \App\Console\Commands\CpaGetExpenditureChargeCommand::class,
        \App\Console\Commands\CpaSettlementCommand::class,
        \App\Console\Commands\CpaOfflineToSettlementCommand::class,
        \App\Console\Commands\ApplyOutTime2ImPushQueueCommand::class,
        \App\Console\Commands\ImPushQueueStatNoticeCommand::class,
        \App\Console\Commands\Monitor\ServiceLog\ServiceLogStatisticsCommand::class,
        \App\Console\Commands\Monitor\ServiceLog\ServiceLogMonitorCommand::class,
        \App\Console\Commands\CpaExpenditureCommand::class,
        \App\Console\Commands\RpoRefreshPostCommand::class,
        // \App\Console\Commands\WuBaPushPostByFeitianCommand::class,
        \App\Console\Commands\WuBaPushPostRetryCommand::class,
        \App\Console\Commands\WuBaUpdateTokenCommand::class,
        \App\Console\Commands\WuBaDeletePostCommand::class,
        \App\Console\Commands\WuBaUpdatePostCommand::class,
        //\App\Console\Commands\TianYanChaPushPostCommand::class,
        \App\Console\Commands\WuBaRefreshPostCommand::class,
        \App\Console\Commands\PerfectCampusPushPostCommand::class,
        \App\Console\Commands\PerfectCampusApplyPopCommand::class,
        \App\Console\Commands\CorpCertificateExpireCommand::class,
        \App\Console\Commands\CorpCertificateExpiredCommand::class,
        \App\Console\Commands\DoumiRMPushCommand::class,
        \App\Console\Commands\ImportThumpToSaasCommand::class,
        \App\Console\Commands\StatCommentTagsCountCommand::class,
        \App\Console\Commands\StatCommentStarsCommand::class,
        \App\Console\Commands\PackageExpiredCommand::class,
        \App\Console\Commands\UpdateJzPostIsWagesGuaranteeCommand::class,
        \App\Console\Commands\DiamondReferencePriceCommand::class,
        \App\Console\Commands\DiamondAuctionQueueCommand::class,
        \App\Console\Commands\DiamondCheckUniformCommand::class,
        \App\Console\Commands\DiamondAuctionResultCommand::class,
        \App\Console\Commands\DiamondCheckResultCommand::class,
        \App\Console\Commands\DiamondNextAuctionsCommand::class,
        \App\Console\Commands\DiamondCheckNextCommand::class,
        \App\Console\Commands\DiamondAuctionPayCommand::class,
        \App\Console\Commands\DiamondAuctionMonitorCommand::class,
        \App\Console\Commands\DiamondAuctionTypeCommand::class,
        \App\Console\Commands\DiamondNewAuctionTypeCommand::class,
        \App\Console\Commands\ConsumeBusinessFinanceCommand::class,
        \App\Console\Commands\DiamondCPTOnlineCommand::class,
        \App\Console\Commands\DiamondCPTUpdateCommand::class,
        \App\Console\Commands\DiamondAuctionCycleOnlineCheckCommand::class,
        \App\Console\Commands\DiamondToPointGoldHandleCommand::class,
        \App\Console\Commands\DiamondOnlineAddTagCommand::class,
        \App\Console\Commands\DiamondOnlineAddTagCheckCommand::class,
        \App\Console\Commands\ApplyTableCDCHandleCommand::class,
        \App\Console\Commands\PackageOrderCreateCommand::class,
        \App\Console\Commands\DiamondAuctionTypeUpdateCommand::class,
        \App\Console\Commands\QualityPositionReportCommand::class,
        \App\Console\Commands\PostBatchRefreshCommand::class,
        \App\Console\Commands\TbkGoodsOrderGetCommand::class,
        \App\Console\Commands\TbkGoodsOrderUpdateCommand::class,
        \App\Console\Commands\DiamondAutoOpenCommand::class,
        \App\Console\Commands\ApplyBlackDenialCommand::class,
        \App\Console\Commands\OfflinePostByCrmCommand::class,
        \App\Console\Commands\DiamondAuctionResultNoticeCommand::class,
        \App\Console\Commands\DiamondBalanceLackingNoticeCommand::class,
        //\App\Console\Commands\TBKCheckAccountCommand::class,
        //\App\Console\Commands\TBKPaySalaryCommand::class,
        \App\Console\Commands\Monitor\BusinessAccounting\DiamondMonitorCommand::class,
        \App\Console\Commands\Monitor\BusinessAccounting\TbkMonitorCommand::class,
        \App\Console\Commands\Monitor\BusinessAccounting\CouponMonitorCommand::class,
        \App\Console\Commands\PostFilterRpo::class,
        // \App\Console\Commands\PostFilterRpoCount::class,
        \App\Console\Commands\WangcaibaoRefreshExpireCommand::class,
        \App\Console\Commands\BizInviteAwardHandleCommand::class,
        \App\Console\Commands\WcbPostOfflineCommand::class,
        \App\Console\Commands\DiamondApplyThreshlodCommand::class,
        \App\Console\Commands\PostMarkUpTag2CrmCommand::class,
        \App\Console\Commands\ApplyAutoPassCommand::class,
        \App\Console\Commands\ApplyAutoRefuseCommand::class,
        \App\Console\Commands\Wuba\WubaDelPostCommand::class,
        \App\Console\Commands\PostCopyMarkUpTag2CrmCommand::class,
        \App\Console\Commands\AddPostHistoryVersionCommand::class,

        \App\Console\Commands\PayoffCommand::class,
        \App\Console\Commands\BizRankAwardCommand::class,
        \App\Console\Commands\BizInviteOcrDataHandleCommand::class,
        \App\Console\Commands\BatchInviteApplyStatisticCommand::class,
        \App\Console\Commands\DiamondYunYingWeiThreshlodCommand::class,
        \App\Console\Commands\OperationPositionApplyCDCHandleCommand::class,
        \App\Console\Commands\AdvPostRelationOfflineCommand::class,
        \App\Console\Commands\PostPushStatus\GoldPostPushStatusCommand::class,
        \App\Console\Commands\PostPushStatus\WangcaibaoPostPushStatusCommand::class,
        \App\Console\Commands\PostPushStatus\PostCDCPushStatusCommand::class,
        \App\Console\Commands\PostPushStatus\CWubaQueueCommand::class,

        \App\Console\Commands\OrgPackage\CheckOrgPackageCommand::class,
        \App\Console\Commands\OrgPackage\CheckOrgPackageValueCommand::class,
        \App\Console\Commands\OrgPackage\OrgChangeQueueCommand::class,
        \App\Console\Commands\OrgPackage\PackageChangeQueueCommand::class,

        \App\Console\Commands\BizPostStatistical\InitializationStatisticalCommand::class,
        \App\Console\Commands\BizPostStatistical\BizPostCDCStatisticalCommand::class,
        \App\Console\Commands\BizPostStatistical\BizPostCityCDCStatisticalCommand::class,
        \App\Console\Commands\BizPostStatistical\BizPostCheckStatisticalCommand::class,


        \App\Console\Commands\ExtensionWorkerCompanyUpdateCommand::class,
        \App\Console\Commands\ExtensionWorkerPostStatCommand::class,
        \App\Console\Commands\RecProfileApplyMonitorCommand::class,
        \App\Console\Commands\PostAddCanChatTagCommand::class,
        \App\Console\Commands\PostAddYunYingWeiTagCommand::class,
        \App\Console\Commands\ExtensionWorkerCompanyAuditStatusUpdateCommand::class,
        //运营策略通知
        \App\Console\Commands\CreateOperationSystemStorageNoticeCommand::class,
        \App\Console\Commands\ProcessOperationSystemStorageNoticeCommand::class,
        \App\Console\Commands\PushCreditRatingCompanyToCrmCommand::class,

        \App\Console\Commands\PostNumIncListeningPostCommand::class,


        //只执行一次脚本
        \App\Console\Commands\Crononce\PreferredDataCleanCommand::class,
        \App\Console\Commands\Crononce\PreferredPostCleanCommand::class,
        \App\Console\Commands\Crononce\PreferredAdvsCleanCommand::class,
        \App\Console\Commands\DiamondAuctionStatisticsCommand::class,
        \App\Console\Commands\WorkTimeCleanCommand::class,
        \App\Console\Commands\DiamondAuctionHistoryStatisticsCommand::class,
        \App\Console\Commands\PostAutoRefuseCommand::class,
        \App\Console\Commands\AddOutMainNoCommand::class,
        \App\Console\Commands\Attr1ToShowCityIdsCommand::class,
        \App\Console\Commands\HistoryComplainDisposeCommand::class,
        \App\Console\Commands\ApplyDisposeRateCommand::class,
        \App\Console\Commands\PostAddMingqiTagCommand::class,
        \App\Console\Commands\DownloadApplyCommand::class,
        \App\Console\Commands\PackageCheckDataCommond::class,
        \App\Console\Commands\SyncRtmQZInit::class,
        \App\Console\Commands\AddRelatedIdToPostConsumeCommand::class,
        \App\Console\Commands\AlipayCampusJobChannelPushCommand::class,
        \App\Console\Commands\Crononce\RetreatmentExtCerti2AuditQueueCommand::class,
        \App\Console\Commands\Wuba\WubaGetReasonForPostCommand::class,
        \App\Console\Commands\Wuba\WubaPushFilterPostCommand::class,

        \App\Console\Commands\DiamondPostCouponSendCommand::class,

        \App\Console\Commands\TaskCrowdPaySalaryCommand::class,
        \App\Console\Commands\FreezeUserHandleCommand::class,
        \App\Console\Commands\SyncIncTagCommand::class,
        \App\Console\Commands\PostLabelOptCommand::class,
        \App\Console\Commands\CrowdApplyChangeContactWayCommand::class,

        \App\Console\Commands\PhoneInviteXCodeExpireCommand::class,
        \App\Console\Commands\PhoneInviteDetailHandleCommand::class,
        \App\Console\Commands\PhoneInviteMonitorCommand::class,
        \App\Console\Commands\PhoneInviteXCodeInitCommand::class,
        \App\Console\Commands\PhoneInviteXCodeAddCommand::class,
        \App\Console\Commands\PhoneInviteCallStatisticCommand::class,
        \App\Console\Commands\PhoneInviteConfirmCallCommand::class,
        \App\Console\Commands\PhoneInviteOutShowNumberMonitorCommand::class,
        \App\Console\Commands\PhoneInviteConcurrencyCacheInitCommand::class,
        \App\Console\Commands\PhoneInviteXCodeMobileInitCommand::class,
        \App\Console\Commands\PhoneInviteXCodeMobileExpireCommand::class,
        \App\Console\Commands\MobileInviteMonitorCommand::class,
        \App\Console\Commands\MobileInviteCallStatisticCommand::class,

        \App\Console\Commands\KachazhuanCrmCallBackHandleCommand::class,
        \App\Console\Commands\KachazhuanPostInfoAuditCommand::class,

        \App\Console\Commands\SetBUserInfoCacheCommand::class,
        \App\Console\Commands\KachazhuanCommand::class,
        \App\Console\Commands\PostFastPubCommand::class,

        \App\Console\Commands\PointGoldGrantCouponCommand::class,
        \App\Console\Commands\PointGoldDetailPriceCommand::class,
        \App\Console\Commands\RecProfileMonitorCommand::class,

        \App\Console\Commands\ExtensionBatchSignCompanyRegSourceCommand::class,
        \App\Console\Commands\ExtensionBatchFixCompanyProvinceCommand::class,


        \App\Console\Commands\ImDayReplyPushCommand::class,
        \App\Console\Commands\ImWeekReplyPushCommand::class,
        \App\Console\Commands\ImUvReplyPushCommand::class,
        \App\Console\Commands\ImUvPushUserSetCommand::class,
        \App\Console\Commands\ImDayPushUserSetCommand::class,
        \App\Console\Commands\ImWeekPushUserSetCommand::class,

        \App\Console\Commands\YearlyCompensateCommand::class,
        \App\Console\Commands\CompanyEditCanChatTagCommand::class,
        \App\Console\Commands\BizAddTagCommand::class,

        \App\Console\Commands\PushCrmImContentCommand::class,
        \App\Console\Commands\PushImActiveBizToCrmCommand::class,
        \App\Console\Commands\AuditCrmImContentCommand::class,

        \App\Console\Commands\ImRemindPushCommand::class,
        \App\Console\Commands\SamehandleDataCommand::class,

        \App\Console\Commands\PostOfflineAlarmCommand::class,
        \App\Console\Commands\CalCompanyNameCommand::class,
        \App\Console\Commands\AddTagFromJobTypeCommand::class,
        \App\Console\Commands\PushExchangeContactOverTimeMsgCommand::class,

        \App\Console\Commands\AddKaChaZhuanSmsCommand::class,
        \App\Console\Commands\ConsumeJumpSmsCommand::class,
        \App\Console\Commands\CompanyBusinessPostOfflineCommand::class,

        \App\Console\Commands\PostNumLimitInitCompanyCommand::class,
        \App\Console\Commands\PostNumLimitInitCompanyByRecentPostCommand::class,
        \App\Console\Commands\MobileInviteGroupBindCommand::class,

        \App\Console\Commands\SyncBizName2RongYunCommand::class,
        \App\Console\Commands\SyncWeiXinUserInfoCommand::class,
        

    ];/**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('inspire')
            ->hourly();/**
         * b端相关脚本
         */
        //JZ-b端基石补贴同步会员状态到jz_apply表--changyuanyuan@doumi.com
        $schedule->command('sync_member_state:send')->cron('*/5 * * * *')->withoutOverlapping();//JZ-b端同步工作经验到jz_profile表-cuijianwen@doumi.com,yufei@doumi.com
        $schedule->command('stat_job_exprience_increment')->cron('5 0 * * *')->withoutOverlapping();//JZ-b端打款完成给c端用户push--cuijianwen@doumi.com,songwenwen@doumi.com
        $schedule->command('pay_finish_push')->cron('*/10 * * * *')->withoutOverlapping();//职位到期下线，半小时处理一次，
        $schedule->command('post_apply_offline')->cron('10,40 * * * *')->withoutOverlapping();//钻石、优选因展位到期职位和展位下线
        $schedule->command('adv_post_relation_offline')->cron('0 0 * * *')->withoutOverlapping();//RPO职位过滤170,171报名用户，半小时处理一次，
        $schedule->command('post:filter_rpo')->cron('*/30 * * * *')->withoutOverlapping();//JZ-b端审批后累计工资和发送push--cuijianwen@doumi.com,songwenwen@doumi.com
        $schedule->command('settle_payment_finish')->cron('*/5 * * * *')->withoutOverlapping();//JZ-b端工资自动创建付款任务--cuijianwen@doumi.com,songwenwen@doumi.com
        //$schedule->command('payment_task')->cron('*/5 * * * *')->withoutOverlapping();//处理任务申请完成超时
        $schedule->command('TaskApplyFinishTimeOut')->cron('*/1 * * * *')->withoutOverlapping();//处理任务申请审核超时
        $schedule->command('TaskApplyAuditTimeOut')->cron('*/1 * * * *')->withoutOverlapping();//在线特工下线脚本
        $schedule->command('put_task_offline:send')->cron('*/30 * * * *')->withoutOverlapping();//库存监控
        $schedule->command('stock_moniter:send')->cron('*/60 * * * *')->withoutOverlapping();//在线特工下线脚本
        //$schedule->command('refund_after_taskoffline:send')->cron('*/50 * * * *')->withoutOverlapping();//在线特工预退款脚本
        $schedule->command('pre_refund_after_taskoffline')->cron('*/50 * * * *')->withoutOverlapping();//在线特工退款脚本
        $schedule->command('TaskExpireRefund')->cron('*/50 * * * *')->withoutOverlapping();//提醒商户有在24小时后自动审核通过的任务，请及时处理，每天十点提醒
        $schedule->command('overtime_apply_task_push')->cron('0 10 * * *')->withoutOverlapping();//提醒商户有在24小时后自动审核通过的任务，请及时处理，每天十七点提醒
        $schedule->command('overtime_apply_task_push')->cron('0 17 * * *')->withoutOverlapping();//提醒商户还有1天到期下线的任务
        $schedule->command('offline_task_push')->cron('0 12 * * *')->withoutOverlapping();//当每天16点时任务状态为进行中&&剩余数量<10的时候短信提醒
        //$schedule->command('TaskStockShortagePush')->cron('0 16 * * *')->withoutOverlapping();//在线特工下线脚本(冻结余额为0的)
        $schedule->command('task_end_with_no_freeze')->cron('* */1 * * *')->withoutOverlapping();//放鸽子记录统计
        //$schedule->command('fanggezi_count')->cron('0 2 * * *')->withoutOverlapping();///$schedule->command('task_update_weight')->dailyAt('04:00');//暑假工抓取中华英才网数据
        ///$schedule->command('shujiagong')->hourly()->withoutOverlapping();///$schedule->command('taskservicefeeadjust')->everyTenMinutes()->withoutOverlapping();//处理im反馈超时，将反馈时间在前10分钟到后1分钟之间的数据设置为反馈超时状态
        $schedule->command('ImFedbackTimeOut')->cron('*/5 * * * *')->withoutOverlapping();//处理im短信发送，将创建时间在前10分钟到当前时间之间的未发送短信发送出去
        //$schedule->command('ImPollSendSms')->cron('*/5 * * * *')->withoutOverlapping();$schedule->command('ImPollSendSmsTemp')->cron('1 20 * * *')->withoutOverlapping();$schedule->command('taskservicefeeadjust')->everyTenMinutes()->withoutOverlapping();//公司认证信息
        ///$schedule->command('CompanyAuditedCommand')->cron('*/10 * * * *')->withoutOverlapping();//默认插入评价，每天早上更新前一天的数据
        //$schedule->command('thumbup_fix:send day')->dailyAt('02:00');//thumbup_fix_fromUser停用并入thumbup_fix
        //$schedule->command('thumbup_fix_fromUser')->dailyAt('03:00');//处理职位权重计算，每10分钟执行一次
        //$schedule->command('PostWeightCal')->cron('*/10 * * * *')->withoutOverlapping();//处理职位权重记录，每天晚上1点执行一次
        //$schedule->command('PostWeightClean')->cron('* */1 * * *')->withoutOverlapping();//alipay报名取数据，存入list
        //$schedule->command('AlipayApplyEmployerManagePush')->cron('*/10 * * * *')->withoutOverlapping();//alipay报名同步
        //$schedule->command('AlipayApplyEmployerManagePop')->cron('0 */1 * * *')->withoutOverlapping();//alipay帖子同步
        //$schedule->command('AlipayGetPost')->cron('0 */1 * * *')->withoutOverlapping();//alipay帖子重试
        #$schedule->command('AlipayPostRetry')->cron('* */1 * * *')->withoutOverlapping();//alipay报名重试
        #$schedule->command('AlipayEmployerRetry')->cron('* */1 * * *')->withoutOverlapping();//alipay帖子刷新
        //$schedule->command('AlipayRefreshByPost')->cron('0 */2 * * *')->withoutOverlapping();//支付宝实习生-报名同步
        //$schedule->command('AlipayCampusJobApplyPop')->cron('0/10 * * * *')->withoutOverlapping();//完美校园报名回调
        $schedule->command('PerfectCampusApplyPop')->cron('0 */1 * * *')->withoutOverlapping();//B端报名管理检测ES是否延迟
        $schedule->command('applyCheckEs')->cron('0 */1 * * *')->withoutOverlapping();//处理支付重试队列中的数据，一分钟一次
        $schedule->command('SettlementRetry')->cron('*/1 * * * *')->withoutOverlapping();//处理发工资push消息，一分钟一次
        $schedule->command('PushPaySalaryMsg')->cron('*/1 * * * *')->withoutOverlapping();//处理结算相关对账，五分钟一次
        $schedule->command('SettlementBalance')->cron('*/5 * * * *')->withoutOverlapping();//生成机器帖子
        ///$schedule->command('ProducePostCommand -P -A')->weekly()->tuesdays()->at('23:59')->withoutOverlapping();//初始化用户简历
        $schedule->command('init_user_profile')->dailyAt('01:00');//处理保证金变化消息通知，一分钟一次
        $schedule->command('deposit_change_sms_message')->cron('*/1 * * * *')->withoutOverlapping();//将redis队列中的帖子历史数据入库
        // $schedule->command('queue_post_history_version_queue')->cron('*/1 * * * *')->withoutOverlapping();//将保证金操作记录数据入库
        $schedule->command('deposit_operate_record')->cron('*/1 * * * *')->withoutOverlapping();//每天16点后统计特工分红数据
        //$schedule->command('TaskBonusSta')->cron('1 16 * * *')->withoutOverlapping();//分红发工资，16:30-18之间，每半小时一次
        //$schedule->command('TaskBonusPay')->cron('30 16 * * *')->withoutOverlapping();//每天18点后推送特工分红信息
        //$schedule->command('PushTaskBonusMsg')->cron('1 17 * * *')->withoutOverlapping();//每天16点后统计特工分红数据
        $schedule->command('TaskBonusQueue')->cron('0 16 * * *')->withoutOverlapping();//将保证金退款
        $schedule->command('deposit:refund')->cron('0 */1 * * *')->withoutOverlapping();//将每天审核通过的会员信息同步到简历中去
        $schedule->command('UcenterProfileSyncCommand')->cron('0 0 * * *')->withoutOverlapping();//剔除职位标题中的特殊字符
        //$schedule->command('PostReplaceSpecialChar')->cron('0 */12 * * *')->withoutOverlapping();//职位预上广告位
        //$schedule->command('PutPostOnAdv')->cron('10 0 * * *')->withoutOverlapping();//零工审核拒绝退款脚本
        $schedule->command('deposit:audit_refuse_refund')->cron('0 3 * * *')->withoutOverlapping();//特工重审超时
        $schedule->command('task:ReApplyAuditTimeOut')->cron('10 2 * * *')->withoutOverlapping();//监控-数据统计，每天凌晨一点执行
        $schedule->command('StatisticsQueue')->cron('0 1 * * *')->withoutOverlapping();//监控-数据核算，职位相关数据对账，调整定时时间需要同时调整脚本中数据推移时间
        $schedule->command('PostAccounting')->cron('*/10 * * * *')->withoutOverlapping();//展位下线导致的职位下线 需要在展位下线脚本【crm】执行之后【00：00】进行
        $schedule->command('PlatinumOfflinePost')->cron('30 0 * * *')->withoutOverlapping();//异步设置联系方式为已读
        $schedule->command('apply:read_phone')->cron('*/10 * * * *')->withoutOverlapping();//缓存jz_apply数据
        $schedule->command('apply:add_apply_to_cache')->cron('0 2 * * *')->withoutOverlapping();//报名过期提醒
        $schedule->command('apply:apply_out_time')->cron('0 9 * * *')->withoutOverlapping();//坐标补全
        $schedule->command('post:add_coordinate')->cron('0 */1 * * *')->withoutOverlapping();//报名过期状态修改
        $schedule->command('apply:expire_status_change')->cron('0 */1 * * *')->withoutOverlapping();//报名提醒
        $schedule->command('apply:applications_sms_notice')->cron('0 10 * * *')->withoutOverlapping();//报名提醒
        $schedule->command('apply:applications_sms_notice')->cron('0 15 * * *')->withoutOverlapping();//广告展位监控
        $schedule->command('AdvCheck')->cron('0 9 * * *')->withoutOverlapping();//定时批量刷新职位脚本
        $schedule->command('PostRefresh')->cron('0 11 * * *')->withoutOverlapping();$schedule->command('PostRefresh')->cron('0 19 * * *')->withoutOverlapping();//特工合作审核异常邮件提醒 (废弃)
        // $schedule->command('openapi:apply_audit_notice')->cron('0 17 * * *')->withoutOverlapping();//特工合作审核队列脚本 (废弃)
        // $schedule->command('openapi:apply_audit')->cron('*/1 * * * *')->withoutOverlapping();//公司资质认证，C端接口，凌晨3点缓存
        $schedule->command('CacheCompanyIsAudited:send')->cron('0 3 * * *')->withoutOverlapping();//报名即将过期数据入imPush队列
        $schedule->command('apply:apply_out_time_2_impush_queue')->dailyAt('09:30');//im发送消息统计脚本
        $schedule->command('im:push_stat_notice')->dailyAt('00:01');//CPA下线结算脚本
        //$schedule->command('CpaOfflineToSettlement')->cron('*/1 * * * *')->withoutOverlapping();//CPA每日结算脚本
        //$schedule->command('CpaSettlement')->cron('10 0 * * *')->withoutOverlapping();//rpo帖子刷线脚本
        $schedule->command('RpoRefreshPost')->cron('0 10-16,21 * * *')->withoutOverlapping();$schedule->command('DoSuperEditReq')->cron('*/5 * * * *')->withoutOverlapping();//公司资质过期处理
        $schedule->command('CorpCertificateExpire')->cron('0 2 * * *')->withoutOverlapping();$schedule->command('CorpCertificateExpired')->cron('0 3 * * *')->withoutOverlapping();//检查职位描述里面的网址链接
        $schedule->command('CheckAdvPostDescription')->cron('0 2 * * *')->withoutOverlapping();//评价信息统计
        $schedule->command('StatCommentStars')->cron('30 1 * * *')->withoutOverlapping();$schedule->command('StatCommentTagsCount')->cron('30 2 * * *')->withoutOverlapping();//钻石推广
        $schedule->command('DiamondApplyThreshlod')->cron('5 0 * * *')->withoutOverlapping();//$schedule->command('DiamondReferencePrice', ['export'])->cron('5 1 * * *')->withoutOverlapping();//每天计算每种钻石竞价类型的参考价
        //$schedule->command('DiamondReferencePrice', ['create'])->cron('0 0,2-17,20-23 * * *')->withoutOverlapping();//
        //$schedule->command('DiamondAuctionQueue')->cron('15 18 * * *')->withoutOverlapping();//竞价
        //$schedule->command('DiamondAuctionMonitor')->cron('*/10 * * * *')->withoutOverlapping();//竞价数据监视器，检查竞价过程中是否有问题数据产生
        //$schedule->command('diamond:consume_business_finance')->cron('*/10 * * * *')->withoutOverlapping();//钻石cpt扣费
        //$schedule->command('diamond:cpt_online')->cron('*/30 * * * *')->withoutOverlapping();//钻石cpt上展位
        //$schedule->command('diamond:cpt_update')->cron('30 0-2 * * *')->withoutOverlapping();//钻石cpt上线展示
        //$schedule->command('diamond:cpt_online_check')->cron('40 1,19 * * *')->withoutOverlapping();//每日钻石展位竞拍成功职位上线（钻石展位）对账
        //$schedule->command('DiamondMonitor')->cron('*/10 * * * *')->withoutOverlapping();//钻石相关对账
        //$schedule->command('DiamondOnlineAddTag')->cron('30 23 * * *')->withoutOverlapping();//上线钻石职位添加广点通渠道屏蔽标签
        //$schedule->command('DiamondOnlineAddTagCheck')->cron('50 23 * * *')->withoutOverlapping();//上线钻石职位添加广点通渠道屏蔽标签检查
        // 钻石老客户拉活 每周一 14：00 发放优惠券
        //$schedule->command('diamond:post_coupon_send')->weeklyOn(1, '14:00')->withoutOverlapping();//wuba推送帖子
        //$schedule->command('WuBaPushPostByFeitian')->cron('30 8 * * *')->withoutOverlapping();//天眼查帖子每日上传
        //$schedule->command('TianYanChaPushPost')->cron('0 1 * * *')->withoutOverlapping();//优选套餐订单过期处理
        $schedule->command('Package:order_expired')->cron('0 0 * * *')->withoutOverlapping();//消息推送相关脚本
        //将impush批量信息推出队列推送im消息
        $schedule->command('pop_im_info_from_queue')->cron('*/2 * * * *')->withoutOverlapping();//推送人头马报名来源i信息
        $schedule->command('push:apply_rm_push_command')->cron('*/5 * * * *')->withoutOverlapping();//每天18点推送今天没有处理的报名给商户
        $schedule->command('ApplyUndealMsg')->cron('0 18 * * *')->withoutOverlapping();//百度官方号推送
        $schedule->command('post:post_push')->cron('0 18 * * *')->withoutOverlapping();//淘宝客
        $schedule->command('TbkGoodsOrderGet', ['create_time'])->cron('*/1 * * * *')->withoutOverlapping();$schedule->command('TbkGoodsOrderGet', ['settle_time'])->cron('*/1 * * * *')->withoutOverlapping();$schedule->command('TbkGoodsOrderUpdate', ['15d'])->cron('*/1 * * * *')->withoutOverlapping();$schedule->command('TbkGoodsOrderUpdate', ['2m'])->cron('*/1 * * * *')->withoutOverlapping();//$schedule->command('TbkMonitor')->cron('*/10 * * * *')->withoutOverlapping();//每周五发送优质职位报表
        $schedule->command('QualityPositionReport')->weeklyOn(5, '10:00')->withoutOverlapping();//黑名单用户拒绝
        $schedule->command('DiamondReferencePrice')->cron('5 1 * * *')->withoutOverlapping();$schedule->command('ApplyBlackDenial')->cron('10 2 * * *')->withoutOverlapping();//钻石竞拍短信通知
        //$schedule->command('DiamondAuctionResultNotice')->cron('0 19 * * *')->withoutOverlapping();//$schedule->command('DiamondBalanceLackingNotice')->cron('30 8 * * *')->withoutOverlapping();//钻石竞拍数据统计
        //$schedule->command('DiamondAuctionStatistics')->cron('30 0 * * *')->withoutOverlapping();//钻石竞拍历史数据统计
        //$schedule->command('DiamondAuctionHistoryStatistics')->cron('00 22 * * *')->withoutOverlapping();//特工发工资监控
        $schedule->command('TaskPaySalaryWatch')->cron('0 9 * * *')->withoutOverlapping();//优惠券对账
        $schedule->command('CouponMonitor')->cron('*/10 * * * *')->withoutOverlapping();//报名投诉处理
        $schedule->command('history_complain_dispose')->cron('00 22 * * *')->withoutOverlapping();$schedule->command('apply_dispose_rate')->cron('00 03 * * *')->withoutOverlapping();//旺财宝高级刷新过期
        $schedule->command('WangcaibaoRefreshExpire')->cron('*/1 * * * *')->withoutOverlapping();//旺财宝下线脚本
        $schedule->command('WcbPostOffline')->cron('*/5 * * * *')->withoutOverlapping();//58推送职位账号检查
      //  $schedule->command('WubaPushAccountCheck')->hourly()->withoutOverlapping();//报名下载发邮件
        $schedule->command('DownloadApply')->cron('10 9 * * *')->withoutOverlapping();//DMB-2277
        //$schedule->command('UpdateJobDateType')->cron('*/30 * * * *')->withoutOverlapping();//优选套餐对账
        $schedule->command('check:package_check_data')->cron('20 10 * * *')->withoutOverlapping();$schedule->command('PixiuOfflineCount')->cron('0 */1 * * *')->withoutOverlapping();//潮兼职报名自动拒绝
        $schedule->command('ApplyAutoRefuse')->cron('0 1,13 * * * *')->withoutOverlapping();//众包发工资的执行任务
        $schedule->command('payoff:opt',['filter'])->cron('*/30 * * * *')->withoutOverlapping();//企业活跃和简历处理排行榜奖励
        $schedule->command('biz_rank_award')->weeklyOn(1, '1:00')->withoutOverlapping();//钻石贴竞价结果计算运营位阈值
        $schedule->command('DiamondAuctionQueue')->cron('10 1 * * *')->withoutOverlapping();// 特工 众包商家 批量发工资脚本 DMB-2613
        $schedule->command('TaskCrowdPaySalary')->cron('*/30 * * * *')->withoutOverlapping();$schedule->command('DiamondYunYingWeiThreshlod')->cron('10 1 * * *')->withoutOverlapping();// 旺才宝兼职定时推送至c端58
        $schedule->command('post_push:wang_post_push_status')->cron('0 */1 * * *')->withoutOverlapping();// 点金线下兼职定时推送至c端58
        $schedule->command('post_push:gold_post_push_status')->cron('0 */1 * * *')->withoutOverlapping();// 定时检查点金帖子统计数据相关准确性
        //$schedule->command('post_statistical:post_check')->cron('0 1 * * *')->withoutOverlapping();// 父子账号定时回收
        $schedule->command('org_package:check_org_package')->cron('*/20 * * * *')->withoutOverlapping();// 父子账号定时校对子账号数与套餐数
        $schedule->command('org_package:check_org_value_package')->cron('0 */1 * * *')->withoutOverlapping();//父子账户 点金 24小时撤回资源
        $schedule->command('org_package:retract_cpa_org_package')->cron('*/20 * * * *')->withoutOverlapping();//父子账户 点金 检查计划撤回用户帖子是否暂停
        $schedule->command('org_package:retract_check_pause_post')->cron('0 */1 * * *')->withoutOverlapping();//咔嚓赚CRM线索审核回调处理
        $schedule->command('KachazhuanCrmCallBackHandle')->cron('*/2 * * * *')->withoutOverlapping();//咔嚓赚发工资

        //快速发帖不活跃用户短信提醒
        $schedule->command('postFastPub',['awakenBiz'])->dailyAt('12:00');//电话邀约号码池和号码信息监控脚本
        $schedule->command('PhoneInviteMonitor')->cron('*/30 * * * *')->withoutOverlapping();//释放虚拟号码入虚拟号码队列
        $schedule->command('PhoneInviteXCodeExpire')->cron('*/10 * * * *')->withoutOverlapping();//邀约电话拨打情况每日统计
        //$schedule->command('PhoneInviteCallStatistic')->cron('00 07 * * *')->withoutOverlapping();//电话邀约每日外显号码接通率监控
        //$schedule->command('PhoneInviteOutShowNumberMonitor')->cron('00 04 * * *')->withoutOverlapping();//每天早上5点初始化并发缓存
        $schedule->command('PhoneInviteConcurrencyCacheInit')->cron('00 05 * * *')->withoutOverlapping();//手机小号每日外显号码接通率监控
        //$schedule->command('phone:monitorMobileSuccess')->cron('00 04 * * *')->withoutOverlapping();//电话邀约每日早上5：15初始化号码池
        $schedule->command('PhoneInviteXCodeInit', ['4000660816'])->cron('15 05 * * *')->withoutOverlapping();//手机小号拨打情况每日统计
        $schedule->command('phone:CallStatistic')->cron('30 00 * * *')->withoutOverlapping();//电话邀约每日早上6：15初始化手机虚拟号号码redis list
        $schedule->command('PhoneInviteXCodeMobileInit')->cron('15 06 * * *')->withoutOverlapping();//手机虚拟号过期脚本
        $schedule->command('PhoneInviteXCodeMobileExpire')->cron('*/5 * * * *')->withoutOverlapping();//手机小号电话邀约号码池和号码信息监控脚本
        $schedule->command('MobileInviteMonitor')->cron('*/30 * * * *')->withoutOverlapping();//手机小号电话拨打情况统计
        $schedule->command('MobileInviteCallStatistic')->cron('0 */1 * * *')->withoutOverlapping();//给c端卡片和消息列表接口数据设置缓存处理
        $schedule->command('SetBUserInfoCache')->cron('0 2 * * *')->withoutOverlapping();//咔嚓赚发工资
        $schedule->command('kachazhuan',['payKachaSalary'])->cron('*/30 7-23 * * *')->withoutOverlapping();//批量更新地推人员30天内获取的公司的审核状态
        $schedule->command('ExtensionWorkerCompanyAuditStatusUpdate')->cron('0 2 */1 * *')->withoutOverlapping();//点击优惠券激励政策 每个月1号5点发放优惠券
        $schedule->command('PointGoldGrantCoupon')->cron('0 5 1 * *')->withoutOverlapping();//商户简历推荐列表监控
        $schedule->command('RecProfileMonitor')->cron('0 23 * * *')->withoutOverlapping();//聊天频率前20的商户推审crm
        $schedule->command('PushImActiveBizToCrm')->cron('30 23 * * *')->withoutOverlapping();//IM敏感词推送crm召回区
         $schedule->command('PushCrmImContent')->cron('0 */2 * * *')->withoutOverlapping();//批量创建运营系统策略通知（短信+push）
        $schedule->command('CreateOperationSystemStorageNotice')->cron('0 2 * * 1,3,5')->withoutOverlapping();//批量处理运营系统策略通知的队列消息
        $schedule->command('ProcessOperationSystemStorageNotice')->cron('0 9-18 * * 1,3,5');//每日召回push策略
        $schedule->command('ImDayPushUserSet')->cron('0 8 * * *')->withoutOverlapping();$schedule->command('ImDayReplyPush')->cron('0 9 * * *')->withoutOverlapping();$schedule->command('ImDayReplyPush',['all'])->cron('0 13 * * *')->withoutOverlapping();//每周召回push策略
        $schedule->command('ImWeekPushUserSet')->cron('0 8 * * 7')->withoutOverlapping();$schedule->command('ImWeekReplyPush')->cron('0 9 * * 7')->withoutOverlapping();$schedule->command('ImWeekReplyPush',['all'])->cron('0 13 * * 7')->withoutOverlapping();//uv召回push策略
        $schedule->command('ImUvPushUserSet')->cron('0 8 * * *')->withoutOverlapping();$schedule->command('ImUvReplyRecord')->cron('0 9 * * *')->withoutOverlapping();$schedule->command('ImUvReplyRecord',['all'])->cron('0 13 * * *')->withoutOverlapping();//批量处理运营系统策略通知的队列消息
        $schedule->command('ProcessOperationSystemStorageNotice')->cron('0 9,10,11,14,15,16 * * 1,3,5')->withoutOverlapping();//职位下线预警
        $schedule->command('PostOfflineAlarm')->cron('10 0 * * *')->withoutOverlapping();//可聊标签
        $schedule->command('PostAddCanChatTag',['addUvBiz'])->hourly()->withoutOverlapping();$schedule->command('PostAddCanChatTag',['delUvBiz'])->daily()->withoutOverlapping();// tag monitor
        $schedule->command('SyncIncTag',['monitor'])->everyFiveMinutes()->withoutOverlapping();//推送交换联系信息超时消息
        $schedule->command('push:exchange_contact_overtime_msg')->cron('*/30 * * * *')->withoutOverlapping();$schedule->command('AddWatermarkToStoreHeadDoorImg')->cron('0 8,13,17,21 * * *')->withoutOverlapping();}
}