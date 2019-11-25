<template>
        <el-button>Test Connection</el-button>
</template>

<script>
import {
    Button,
    ButtonGroup
} from 'element-ui';

export default {
    name: "TestConnection",
    props: {

    },
    data() {
        return {

        }
    },
    mounted() {
      alert(1);
    }
};
</script>
