<?php

class Message extends MessageCore {};
abstract class PaymentModule extends PaymentModuleCore {};
class WarehouseAddress extends WarehouseAddressCore {};
class ImageType extends ImageTypeCore {};
class ConfigurationTest extends ConfigurationTestCore {};
class ProductPresenterFactory extends ProductPresenterFactoryCore {};
class FeatureValue extends FeatureValueCore {};
class Address extends AddressCore {};
class Connection extends ConnectionCore {};
class AddressChecksum extends AddressChecksumCore {};
class ContactLang extends ContactLangCore {};
class TabLang extends TabLangCore {};
class AttributeLang extends AttributeLangCore {};
class FeatureValueLang extends FeatureValueLangCore {};
class MetaLang extends MetaLangCore {};
class GroupLang extends GroupLangCore {};
class ProfileLang extends ProfileLangCore {};
class DataLang extends DataLangCore {};
class OrderMessageLang extends OrderMessageLangCore {};
class QuickAccessLang extends QuickAccessLangCore {};
class SupplyOrderStateLang extends SupplyOrderStateLangCore {};
class CmsCategoryLang extends CmsCategoryLangCore {};
class ConfigurationLang extends ConfigurationLangCore {};
class CategoryLang extends CategoryLangCore {};
class StockMvtReasonLang extends StockMvtReasonLangCore {};
class GenderLang extends GenderLangCore {};
class OrderStateLang extends OrderStateLangCore {};
class OrderReturnStateLang extends OrderReturnStateLangCore {};
class RiskLang extends RiskLangCore {};
class AttributeGroupLang extends AttributeGroupLangCore {};
class CarrierLang extends CarrierLangCore {};
class ThemeLang extends ThemeLangCore {};
class FeatureLang extends FeatureLangCore {};
class Employee extends EmployeeCore {};
class Cart extends CartCore {};
class CMSRole extends CMSRoleCore {};
class Uploader extends UploaderCore {};
class ProductAssembler extends ProductAssemblerCore {};
class AddressValidator extends AddressValidatorCore {};
class CheckoutProcess extends CheckoutProcessCore {};
class CheckoutPaymentStep extends CheckoutPaymentStepCore {};
abstract class AbstractCheckoutStep extends AbstractCheckoutStepCore {};
class DeliveryOptionsFinder extends DeliveryOptionsFinderCore {};
class ConditionsToApproveFinder extends ConditionsToApproveFinderCore {};
class CheckoutPersonalInformationStep extends CheckoutPersonalInformationStepCore {};
class CheckoutDeliveryStep extends CheckoutDeliveryStepCore {};
class CartChecksum extends CartChecksumCore {};
class CheckoutSession extends CheckoutSessionCore {};
class CheckoutAddressesStep extends CheckoutAddressesStepCore {};
class PaymentOptionsFinder extends PaymentOptionsFinderCore {};
class Referrer extends ReferrerCore {};
class CSV extends CSVCore {};
class SpecificPrice extends SpecificPriceCore {};
class AttributeGroup extends AttributeGroupCore {};
class CMS extends CMSCore {};
class Page extends PageCore {};
class GroupReduction extends GroupReductionCore {};
class ValidateConstraintTranslator extends ValidateConstraintTranslatorCore {};
class CustomerThread extends CustomerThreadCore {};
class FileUploader extends FileUploaderCore {};
class AddressFormat extends AddressFormatCore {};
class Chart extends ChartCore {};
class Attachment extends AttachmentCore {};
class ImageManager extends ImageManagerCore {};
class CustomizationField extends CustomizationFieldCore {};
abstract class TreeToolbarButton extends TreeToolbarButtonCore {};
class TreeToolbarLink extends TreeToolbarLinkCore {};
class TreeToolbarSearch extends TreeToolbarSearchCore {};
class TreeToolbar extends TreeToolbarCore {};
class TreeToolbarSearchCategories extends TreeToolbarSearchCategoriesCore {};
class Tree extends TreeCore {};
abstract class AbstractAssetManager extends AbstractAssetManagerCore {};
class StylesheetManager extends StylesheetManagerCore {};
class JavascriptManager extends JavascriptManagerCore {};
class JsMinifier extends JsMinifierCore {};
class CssMinifier extends CssMinifierCore {};
class CccReducer extends CccReducerCore {};
class PrestaShopCollection extends PrestaShopCollectionCore {};
class RequestSql extends RequestSqlCore {};
class PrestaShopBackup extends PrestaShopBackupCore {};
class TranslatedConfiguration extends TranslatedConfigurationCore {};
abstract class ModuleAdminController extends ModuleAdminControllerCore {};
class FrontController extends FrontControllerCore {};
abstract class Controller extends ControllerCore {};
class ModuleFrontController extends ModuleFrontControllerCore {};
abstract class ProductPresentingFrontController extends ProductPresentingFrontControllerCore {};
abstract class ProductListingFrontController extends ProductListingFrontControllerCore {};
class AdminController extends AdminControllerCore {};
class DateRange extends DateRangeCore {};
class Carrier extends CarrierCore {};
class HelperTreeCategories extends HelperTreeCategoriesCore {};
class HelperKpiRow extends HelperKpiRowCore {};
class HelperImageUploader extends HelperImageUploaderCore {};
class HelperOptions extends HelperOptionsCore {};
class HelperShop extends HelperShopCore {};
class HelperForm extends HelperFormCore {};
class HelperKpi extends HelperKpiCore {};
class HelperTreeShops extends HelperTreeShopsCore {};
class HelperUploader extends HelperUploaderCore {};
class HelperView extends HelperViewCore {};
class HelperCalendar extends HelperCalendarCore {};
class Helper extends HelperCore {};
class HelperList extends HelperListCore {};
class Tools extends ToolsCore {};
class Configuration extends ConfigurationCore {};
class WebserviceOutputXML extends WebserviceOutputXMLCore {};
class WebserviceKey extends WebserviceKeyCore {};
class WebserviceException extends WebserviceExceptionCore {};
class WebserviceSpecificManagementSearch extends WebserviceSpecificManagementSearchCore {};
class WebserviceRequest extends WebserviceRequestCore {};
class WebserviceSpecificManagementImages extends WebserviceSpecificManagementImagesCore {};
class WebserviceOutputJSON extends WebserviceOutputJSONCore {};
class WebserviceSpecificManagementAttachments extends WebserviceSpecificManagementAttachmentsCore {};
class WebserviceOutputBuilder extends WebserviceOutputBuilderCore {};
class SupplierAddress extends SupplierAddressCore {};
class SupplyOrderState extends SupplyOrderStateCore {};
class StockManager extends StockManagerCore {};
class SupplyOrderDetail extends SupplyOrderDetailCore {};
class StockMvtReason extends StockMvtReasonCore {};
class Stock extends StockCore {};
class StockManagerFactory extends StockManagerFactoryCore {};
class StockMvtWS extends StockMvtWSCore {};
abstract class StockManagerModule extends StockManagerModuleCore {};
class Warehouse extends WarehouseCore {};
class WarehouseProductLocation extends WarehouseProductLocationCore {};
class StockMvt extends StockMvtCore {};
class StockAvailable extends StockAvailableCore {};
class SupplyOrderHistory extends SupplyOrderHistoryCore {};
class SupplyOrderReceiptHistory extends SupplyOrderReceiptHistoryCore {};
class SupplyOrder extends SupplyOrderCore {};
class Translate extends TranslateCore {};
class ConnectionsSource extends ConnectionsSourceCore {};
class Profile extends ProfileCore {};
class Media extends MediaCore {};
class CustomerLoginFormatter extends CustomerLoginFormatterCore {};
class CustomerAddressFormatter extends CustomerAddressFormatterCore {};
class CustomerAddressPersister extends CustomerAddressPersisterCore {};
class CustomerLoginForm extends CustomerLoginFormCore {};
class CustomerForm extends CustomerFormCore {};
abstract class AbstractForm extends AbstractFormCore {};
class CustomerPersister extends CustomerPersisterCore {};
class CustomerFormatter extends CustomerFormatterCore {};
class CustomerAddressForm extends CustomerAddressFormCore {};
class FormField extends FormFieldCore {};
class Country extends CountryCore {};
class Supplier extends SupplierCore {};
class Customization extends CustomizationCore {};
class PhpEncryptionEngine extends PhpEncryptionEngineCore {};
class Hook extends HookCore {};
abstract class ModuleGrid extends ModuleGridCore {};
abstract class ModuleGraphEngine extends ModuleGraphEngineCore {};
abstract class ModuleGridEngine extends ModuleGridEngineCore {};
abstract class Module extends ModuleCore {};
abstract class ModuleGraph extends ModuleGraphCore {};
abstract class CarrierModule extends CarrierModuleCore {};
class QqUploadedFileXhr extends QqUploadedFileXhrCore {};
class CMSCategory extends CMSCategoryCore {};
class Curve extends CurveCore {};
class LinkProxy extends LinkProxyCore {};
class Store extends StoreCore {};
class Mail extends MailCore {};
abstract class ObjectModel extends ObjectModelCore {};
class RangePrice extends RangePriceCore {};
class RangeWeight extends RangeWeightCore {};
class ManufacturerAddress extends ManufacturerAddressCore {};
class Contact extends ContactCore {};
class Zone extends ZoneCore {};
class CustomerAddress extends CustomerAddressCore {};
class Dispatcher extends DispatcherCore {};
class Tab extends TabCore {};
class Category extends CategoryCore {};
class Cookie extends CookieCore {};
class PhpEncryptionLegacyEngine extends PhpEncryptionLegacyEngineCore {};
class Validate extends ValidateCore {};
class Access extends AccessCore {};
class Feature extends FeatureCore {};
class Windows extends WindowsCore {};
class Delivery extends DeliveryCore {};
class Group extends GroupCore {};
class Guest extends GuestCore {};
class PhpEncryption extends PhpEncryptionCore {};
class Tag extends TagCore {};
class ProductDownload extends ProductDownloadCore {};
class SmartyCustom extends SmartyCustomCore {};
class SmartyDevTemplate extends SmartyDevTemplateCore {};
class SmartyCustomTemplate extends SmartyCustomTemplateCore {};
class SmartyResourceModule extends SmartyResourceModuleCore {};
class SmartyResourceParent extends SmartyResourceParentCore {};
class TemplateFinder extends TemplateFinderCore {};
class Notification extends NotificationCore {};
class Currency extends CurrencyCore {};
abstract class Cache extends CacheCore {};
class CacheApc extends CacheApcCore {};
class CacheMemcached extends CacheMemcachedCore {};
class CacheXcache extends CacheXcacheCore {};
class CacheMemcache extends CacheMemcacheCore {};
class Image extends ImageCore {};
class Customer extends CustomerCore {};
class Manufacturer extends ManufacturerCore {};
class CustomerMessage extends CustomerMessageCore {};
class Risk extends RiskCore {};
class Search extends SearchCore {};
class CustomerSession extends CustomerSessionCore {};
class State extends StateCore {};
abstract class AbstractLogger extends AbstractLoggerCore {};
class FileLogger extends FileLoggerCore {};
class Link extends LinkCore {};
class LocalizationPack extends LocalizationPackCore {};
class ConfigurationKPI extends ConfigurationKPICore {};
class EmployeeSession extends EmployeeSessionCore {};
class Pack extends PackCore {};
class SearchEngine extends SearchEngineCore {};
class Combination extends CombinationCore {};
class ProductSale extends ProductSaleCore {};
class QqUploadedFileForm extends QqUploadedFileFormCore {};
class ShopGroup extends ShopGroupCore {};
class Shop extends ShopCore {};
class ShopUrl extends ShopUrlCore {};
class Upgrader extends UpgraderCore {};
class Gender extends GenderCore {};
class ProductSupplier extends ProductSupplierCore {};
class Order extends OrderCore {};
class OrderCarrier extends OrderCarrierCore {};
class OrderState extends OrderStateCore {};
class OrderPayment extends OrderPaymentCore {};
class OrderCartRule extends OrderCartRuleCore {};
class OrderInvoice extends OrderInvoiceCore {};
class OrderSlip extends OrderSlipCore {};
class OrderDiscount extends OrderDiscountCore {};
class OrderReturnState extends OrderReturnStateCore {};
class OrderDetail extends OrderDetailCore {};
class OrderHistory extends OrderHistoryCore {};
class OrderReturn extends OrderReturnCore {};
class OrderMessage extends OrderMessageCore {};
class CartRule extends CartRuleCore {};
abstract class Db extends DbCore {};
class DbQuery extends DbQueryCore {};
class DbPDO extends DbPDOCore {};
class DbMySQLi extends DbMySQLiCore {};
class Context extends ContextCore {};
class HTMLTemplateOrderReturn extends HTMLTemplateOrderReturnCore {};
class HTMLTemplateOrderSlip extends HTMLTemplateOrderSlipCore {};
class PDF extends PDFCore {};
class PDFGenerator extends PDFGeneratorCore {};
class HTMLTemplateSupplyOrderForm extends HTMLTemplateSupplyOrderFormCore {};
abstract class HTMLTemplate extends HTMLTemplateCore {};
class HTMLTemplateInvoice extends HTMLTemplateInvoiceCore {};
class HTMLTemplateDeliverySlip extends HTMLTemplateDeliverySlipCore {};
class Attribute extends AttributeCore {};
class TaxRulesGroup extends TaxRulesGroupCore {};
class TaxRule extends TaxRuleCore {};
abstract class TaxManagerModule extends TaxManagerModuleCore {};
class Tax extends TaxCore {};
class TaxCalculator extends TaxCalculatorCore {};
class TaxManagerFactory extends TaxManagerFactoryCore {};
class TaxRulesTaxManager extends TaxRulesTaxManagerCore {};
class TaxConfiguration extends TaxConfigurationCore {};
class Alias extends AliasCore {};
class QuickAccess extends QuickAccessCore {};
class Product extends ProductCore {};
class SpecificPriceRule extends SpecificPriceRuleCore {};
class Meta extends MetaCore {};
class PrestaShopException extends PrestaShopExceptionCore {};
class PrestaShopModuleException extends PrestaShopModuleExceptionCore {};
class PrestaShopDatabaseException extends PrestaShopDatabaseExceptionCore {};
class PrestaShopPaymentException extends PrestaShopPaymentExceptionCore {};
class PrestaShopObjectNotFoundException extends PrestaShopObjectNotFoundExceptionCore {};
class Language extends LanguageCore {};
class SpecificPriceFormatter extends SpecificPriceFormatterCore {};
class PrestaShopLogger extends PrestaShopLoggerCore {};