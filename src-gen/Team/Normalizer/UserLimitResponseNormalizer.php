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
class UserLimitResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \NxSys\Library\Clients\Brex\API\Team\Model\UserLimitResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Team\Model\UserLimitResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \NxSys\Library\Clients\Brex\API\Team\Model\UserLimitResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('monthly_limit', $data)) {
            $object->setMonthlyLimit($this->denormalizer->denormalize($data['monthly_limit'], \NxSys\Library\Clients\Brex\API\Team\Model\UserLimitResponseMonthlyLimit::class, 'json', $context));
            unset($data['monthly_limit']);
        }
        if (\array_key_exists('monthly_available', $data)) {
            $object->setMonthlyAvailable($this->denormalizer->denormalize($data['monthly_available'], \NxSys\Library\Clients\Brex\API\Team\Model\UserLimitResponseMonthlyAvailable::class, 'json', $context));
            unset($data['monthly_available']);
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
        if ($data->isInitialized('monthlyLimit') && null !== $data->getMonthlyLimit()) {
            $dataArray['monthly_limit'] = $this->normalizer->normalize($data->getMonthlyLimit(), 'json', $context);
        }
        if ($data->isInitialized('monthlyAvailable') && null !== $data->getMonthlyAvailable()) {
            $dataArray['monthly_available'] = $this->normalizer->normalize($data->getMonthlyAvailable(), 'json', $context);
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
        return [\NxSys\Library\Clients\Brex\API\Team\Model\UserLimitResponse::class => false];
    }
}