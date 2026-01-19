<?php

namespace NxSys\Library\Clients\Brex\API\Team\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use NxSys\Library\Clients\Brex\API\Team\Runtime\Normalizer\CheckArray;
use NxSys\Library\Clients\Brex\API\Team\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class SecureEmailForCardDetailsRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \NxSys\Library\Clients\Brex\API\Team\Model\SecureEmailForCardDetailsRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Team\Model\SecureEmailForCardDetailsRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \NxSys\Library\Clients\Brex\API\Team\Model\SecureEmailForCardDetailsRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('recipient_email', $data)) {
            $object->setRecipientEmail($data['recipient_email']);
            unset($data['recipient_email']);
        }
        if (\array_key_exists('sender_name', $data)) {
            $object->setSenderName($data['sender_name']);
            unset($data['sender_name']);
        }
        if (\array_key_exists('message', $data) && $data['message'] !== null) {
            $object->setMessage($data['message']);
            unset($data['message']);
        }
        elseif (\array_key_exists('message', $data) && $data['message'] === null) {
            $object->setMessage(null);
        }
        if (\array_key_exists('expiry_days', $data) && $data['expiry_days'] !== null) {
            $object->setExpiryDays($data['expiry_days']);
            unset($data['expiry_days']);
        }
        elseif (\array_key_exists('expiry_days', $data) && $data['expiry_days'] === null) {
            $object->setExpiryDays(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('recipientEmail') && null !== $data->getRecipientEmail()) {
            $dataArray['recipient_email'] = $data->getRecipientEmail();
        }
        if ($data->isInitialized('senderName') && null !== $data->getSenderName()) {
            $dataArray['sender_name'] = $data->getSenderName();
        }
        if ($data->isInitialized('message')) {
            $dataArray['message'] = $data->getMessage();
        }
        if ($data->isInitialized('expiryDays')) {
            $dataArray['expiry_days'] = $data->getExpiryDays();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\NxSys\Library\Clients\Brex\API\Team\Model\SecureEmailForCardDetailsRequest::class => false];
    }
}