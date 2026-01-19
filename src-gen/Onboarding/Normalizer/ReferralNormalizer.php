<?php

namespace NxSys\Library\Clients\Brex\API\Onboarding\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use NxSys\Library\Clients\Brex\API\Onboarding\Runtime\Normalizer\CheckArray;
use NxSys\Library\Clients\Brex\API\Onboarding\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ReferralNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \NxSys\Library\Clients\Brex\API\Onboarding\Model\Referral::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Onboarding\Model\Referral::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \NxSys\Library\Clients\Brex\API\Onboarding\Model\Referral();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('referral_signup_url', $data)) {
            $object->setReferralSignupUrl($data['referral_signup_url']);
            unset($data['referral_signup_url']);
        }
        if (\array_key_exists('expires_at', $data)) {
            $object->setExpiresAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['expires_at']));
            unset($data['expires_at']);
        }
        if (\array_key_exists('customer_email', $data) && $data['customer_email'] !== null) {
            $object->setCustomerEmail($data['customer_email']);
            unset($data['customer_email']);
        }
        elseif (\array_key_exists('customer_email', $data) && $data['customer_email'] === null) {
            $object->setCustomerEmail(null);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('products', $data)) {
            $values = [];
            foreach ($data['products'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \NxSys\Library\Clients\Brex\API\Onboarding\Model\Product::class, 'json', $context);
            }
            $object->setProducts($values);
            unset($data['products']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['referral_signup_url'] = $data->getReferralSignupUrl();
        $dataArray['expires_at'] = $data->getExpiresAt()->format('Y-m-d\TH:i:sP');
        if ($data->isInitialized('customerEmail')) {
            $dataArray['customer_email'] = $data->getCustomerEmail();
        }
        $dataArray['status'] = $data->getStatus();
        $values = [];
        foreach ($data->getProducts() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['products'] = $values;
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\NxSys\Library\Clients\Brex\API\Onboarding\Model\Referral::class => false];
    }
}