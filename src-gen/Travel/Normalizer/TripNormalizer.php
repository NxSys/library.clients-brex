<?php

namespace NxSys\Library\Clients\Brex\API\Travel\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use NxSys\Library\Clients\Brex\API\Travel\Runtime\Normalizer\CheckArray;
use NxSys\Library\Clients\Brex\API\Travel\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TripNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \NxSys\Library\Clients\Brex\API\Travel\Model\Trip::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Travel\Model\Trip::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \NxSys\Library\Clients\Brex\API\Travel\Model\Trip();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
            unset($data['created_at']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']));
            unset($data['updated_at']);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('booker_user_id', $data)) {
            $object->setBookerUserId($data['booker_user_id']);
            unset($data['booker_user_id']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('traveler', $data)) {
            $object->setTraveler($this->denormalizer->denormalize($data['traveler'], \NxSys\Library\Clients\Brex\API\Travel\Model\TripTraveler::class, 'json', $context));
            unset($data['traveler']);
        }
        if (\array_key_exists('version', $data)) {
            $object->setVersion($data['version']);
            unset($data['version']);
        }
        if (\array_key_exists('billable_at', $data) && $data['billable_at'] !== null) {
            $object->setBillableAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['billable_at']));
            unset($data['billable_at']);
        }
        elseif (\array_key_exists('billable_at', $data) && $data['billable_at'] === null) {
            $object->setBillableAt(null);
        }
        if (\array_key_exists('starts_at', $data) && $data['starts_at'] !== null) {
            $object->setStartsAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['starts_at']));
            unset($data['starts_at']);
        }
        elseif (\array_key_exists('starts_at', $data) && $data['starts_at'] === null) {
            $object->setStartsAt(null);
        }
        if (\array_key_exists('ends_at', $data) && $data['ends_at'] !== null) {
            $object->setEndsAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['ends_at']));
            unset($data['ends_at']);
        }
        elseif (\array_key_exists('ends_at', $data) && $data['ends_at'] === null) {
            $object->setEndsAt(null);
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
        $dataArray['id'] = $data->getId();
        $dataArray['created_at'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['updated_at'] = $data->getUpdatedAt()->format('Y-m-d\TH:i:sP');
        if ($data->isInitialized('name')) {
            $dataArray['name'] = $data->getName();
        }
        $dataArray['booker_user_id'] = $data->getBookerUserId();
        $dataArray['status'] = $data->getStatus();
        if ($data->isInitialized('traveler') && null !== $data->getTraveler()) {
            $dataArray['traveler'] = $this->normalizer->normalize($data->getTraveler(), 'json', $context);
        }
        $dataArray['version'] = $data->getVersion();
        if ($data->isInitialized('billableAt')) {
            $dataArray['billable_at'] = $data->getBillableAt()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('startsAt')) {
            $dataArray['starts_at'] = $data->getStartsAt()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('endsAt')) {
            $dataArray['ends_at'] = $data->getEndsAt()?->format('Y-m-d\TH:i:sP');
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
        return [\NxSys\Library\Clients\Brex\API\Travel\Model\Trip::class => false];
    }
}