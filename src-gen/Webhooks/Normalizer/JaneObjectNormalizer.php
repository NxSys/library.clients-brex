<?php

namespace NxSys\Library\Clients\Brex\API\Webhooks\Normalizer;

use NxSys\Library\Clients\Brex\API\Webhooks\Runtime\Normalizer\CheckArray;
use NxSys\Library\Clients\Brex\API\Webhooks\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    protected $normalizers = [
        
        \NxSys\Library\Clients\Brex\API\Webhooks\Model\CreateWebhookSubscriptionRequest::class => \NxSys\Library\Clients\Brex\API\Webhooks\Normalizer\CreateWebhookSubscriptionRequestNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Webhooks\Model\ExpensePaymentStatusUpdatedEvent::class => \NxSys\Library\Clients\Brex\API\Webhooks\Normalizer\ExpensePaymentStatusUpdatedEventNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Webhooks\Model\ExpensePaymentStatusUpdatedEventAmount::class => \NxSys\Library\Clients\Brex\API\Webhooks\Normalizer\ExpensePaymentStatusUpdatedEventAmountNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Webhooks\Model\Money::class => \NxSys\Library\Clients\Brex\API\Webhooks\Normalizer\MoneyNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Webhooks\Model\PageWebhookSubscription::class => \NxSys\Library\Clients\Brex\API\Webhooks\Normalizer\PageWebhookSubscriptionNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Webhooks\Model\ProductApplication::class => \NxSys\Library\Clients\Brex\API\Webhooks\Normalizer\ProductApplicationNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Webhooks\Model\ReferralActivatedEvent::class => \NxSys\Library\Clients\Brex\API\Webhooks\Normalizer\ReferralActivatedEventNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Webhooks\Model\ReferralApplicationStatusChangedEvent::class => \NxSys\Library\Clients\Brex\API\Webhooks\Normalizer\ReferralApplicationStatusChangedEventNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Webhooks\Model\ReferralCreatedEvent::class => \NxSys\Library\Clients\Brex\API\Webhooks\Normalizer\ReferralCreatedEventNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Webhooks\Model\TransferEvent::class => \NxSys\Library\Clients\Brex\API\Webhooks\Normalizer\TransferEventNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Webhooks\Model\TransferFailedEvent::class => \NxSys\Library\Clients\Brex\API\Webhooks\Normalizer\TransferFailedEventNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Webhooks\Model\TransferProcessedEvent::class => \NxSys\Library\Clients\Brex\API\Webhooks\Normalizer\TransferProcessedEventNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Webhooks\Model\UpdateWebhookSubscriptionRequest::class => \NxSys\Library\Clients\Brex\API\Webhooks\Normalizer\UpdateWebhookSubscriptionRequestNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Webhooks\Model\UserUpdatedEvent::class => \NxSys\Library\Clients\Brex\API\Webhooks\Normalizer\UserUpdatedEventNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Webhooks\Model\WebhookSecret::class => \NxSys\Library\Clients\Brex\API\Webhooks\Normalizer\WebhookSecretNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Webhooks\Model\WebhookSubscription::class => \NxSys\Library\Clients\Brex\API\Webhooks\Normalizer\WebhookSubscriptionNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \NxSys\Library\Clients\Brex\API\Webhooks\Runtime\Normalizer\ReferenceNormalizer::class,
    ], $normalizersCache = [];
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $normalizerClass = $this->normalizers[get_class($data)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($data, $format, $context);
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $denormalizerClass = $this->normalizers[$type];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $type, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [
            
            \NxSys\Library\Clients\Brex\API\Webhooks\Model\CreateWebhookSubscriptionRequest::class => false,
            \NxSys\Library\Clients\Brex\API\Webhooks\Model\ExpensePaymentStatusUpdatedEvent::class => false,
            \NxSys\Library\Clients\Brex\API\Webhooks\Model\ExpensePaymentStatusUpdatedEventAmount::class => false,
            \NxSys\Library\Clients\Brex\API\Webhooks\Model\Money::class => false,
            \NxSys\Library\Clients\Brex\API\Webhooks\Model\PageWebhookSubscription::class => false,
            \NxSys\Library\Clients\Brex\API\Webhooks\Model\ProductApplication::class => false,
            \NxSys\Library\Clients\Brex\API\Webhooks\Model\ReferralActivatedEvent::class => false,
            \NxSys\Library\Clients\Brex\API\Webhooks\Model\ReferralApplicationStatusChangedEvent::class => false,
            \NxSys\Library\Clients\Brex\API\Webhooks\Model\ReferralCreatedEvent::class => false,
            \NxSys\Library\Clients\Brex\API\Webhooks\Model\TransferEvent::class => false,
            \NxSys\Library\Clients\Brex\API\Webhooks\Model\TransferFailedEvent::class => false,
            \NxSys\Library\Clients\Brex\API\Webhooks\Model\TransferProcessedEvent::class => false,
            \NxSys\Library\Clients\Brex\API\Webhooks\Model\UpdateWebhookSubscriptionRequest::class => false,
            \NxSys\Library\Clients\Brex\API\Webhooks\Model\UserUpdatedEvent::class => false,
            \NxSys\Library\Clients\Brex\API\Webhooks\Model\WebhookSecret::class => false,
            \NxSys\Library\Clients\Brex\API\Webhooks\Model\WebhookSubscription::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}